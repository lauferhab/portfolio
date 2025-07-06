let typingTimeout = null;  // Reemplaza typingInterval

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

  // Saludo y nombre separados para poder aplicar estilos si es necesario
  document.getElementById("saludo-text").textContent = translations.saludo;
  document.getElementById("nombre").textContent = translations.nombre;

  // Typing dinámico
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

  // Botones idioma
  document.getElementById("lang-es").classList.toggle("active", lang === "es");
  document.getElementById("lang-en").classList.toggle("active", lang === "en");
}
