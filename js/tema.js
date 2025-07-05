const darkMode = document.querySelector(".dark-mode");
const body = document.body;

// Al hacer clic en el botón
darkMode.addEventListener("click", () => {
  body.classList.toggle("active");

  // Guardar preferencia en localStorage
  const modo = body.classList.contains("active") ? "oscuro" : "claro";
  localStorage.setItem("tema", modo);
});

// Al cargar la página
window.addEventListener("DOMContentLoaded", () => {
  const temaGuardado = localStorage.getItem("tema");
  if (temaGuardado === "oscuro") {
    body.classList.add("active");
  }
});