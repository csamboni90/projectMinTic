const botonToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

botonToggle.addEventListener("click", ()=>{
    navMenu.classList.toggle("nav-menu-visible");
    console.log("click menu");
    
    /* Toggle aria-label attribute for screen readers */
    if (navMenu.classList.contains("nav-menu-visible")) {
        botonToggle.setAttribute("aria-label", "Cerrar menú");
    } else {
        botonToggle.setAttribute("aria-label", "Abrir menú");
    }
});

