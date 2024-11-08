import { datos } from "../data/servicesData.js";
const botonToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

const services = document.querySelectorAll(".servicesData");

datos.forEach((dato) => {
  const { name, description, img } = dato;
  console.log(name, description, img);
  services.forEach((service) => {
    service.innerHTML += `
        <div class="serviceItem">
        <img src="${img}" alt="${name}" />
        <h3>${name}</h3>
        <p>${description}</p>
        </div>
    `;
  });
});

botonToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu-visible");
  console.log("click menu");

  /* Toggle aria-label attribute for screen readers */
  if (navMenu.classList.contains("nav-menu-visible")) {
    botonToggle.setAttribute("aria-label", "Cerrar menú");
  } else {
    botonToggle.setAttribute("aria-label", "Abrir menú");
  }
});
