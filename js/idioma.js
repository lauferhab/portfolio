let typingInterval = null;

document.addEventListener("DOMContentLoaded", () => {
  const savedLang = localStorage.getItem("lang") || "es";
  setLanguage(savedLang);

  document.getElementById("lang-es").addEventListener("click", () => setLanguage("es"));
  document.getElementById("lang-en").addEventListener("click", () => setLanguage("en"));
});

async function setLanguage(lang) {
  localStorage.setItem("lang", lang);

  const res = await fetch(`./lang/${lang}.json`);
  const translations = await res.json();

  // Saludo y nombre con estilos conservados
  document.getElementById("saludo-text").textContent = translations.saludo;
  document.getElementById("nombre").textContent = translations.nombre;

  // Frases dinámicas con typing
  const span = document.querySelector(".typing-text span");
  if (span && translations.frases) {
    startTyping(translations.frases, span);
  }

    document.querySelectorAll("[data-lang]").forEach(el => {
      const key = el.getAttribute("data-lang");
      if (key === "saludo" || key === "frases") return;

      if (translations[key]) {
        el.textContent = translations[key];
      }
    });

  // Ocultar bandera activa
  document.getElementById("lang-es").classList.toggle("active", lang === "es");
  document.getElementById("lang-en").classList.toggle("active", lang === "en");
}

function startTyping(frases, el) {
  let i = 0;
  let j = 0;
  let borrando = false;

  clearTimeout(typingInterval);

  function escribir() {
    const texto = frases[i];

    if (!borrando) {
      j++;
      el.textContent = texto.substring(0, j);
      if (j === texto.length + 1) {
        borrando = true;
        typingInterval = setTimeout(escribir, 1500);
        return;
      }
    } else {
      j--;
      el.textContent = texto.substring(0, j);
      if (j === 0) {
        borrando = false;
        i = (i + 1) % frases.length;
      }
    }

    typingInterval = setTimeout(escribir, 100);
  }

  escribir();
}

observer.observe(document.querySelector(".home-content"));

const observer = new IntersectionObserver((entries) => {
  const el = document.querySelector(".typing-text span");

  entries.forEach(entry => {
    if (entry.isIntersecting && !typingActivo) {
      typingActivo = true;
      startTyping(["Frase 1", "Frase 2"], el);
    } else if (!entry.isIntersecting) {
      stopTyping();
    }
  });
}, { threshold: 0 });

function stopTyping() {
  clearTimeout(typingTimeout);
  typingActivo = false;
}