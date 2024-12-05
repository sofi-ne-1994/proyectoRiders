// Función para el Carrusel Automático
let slideIndex = 0;
const slides = document.querySelectorAll(".carrusel .slide");

function showSlides() {
    slides.forEach((slide, index) => {
        slide.style.opacity = "0"; // Oculta todas las diapositivas
    });
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.opacity = "1"; // Muestra la diapositiva actual
    setTimeout(showSlides, 3000); // Cambia de diapositiva cada 3 segundos
}

// Inicia el carrusel cuando se carga la página
window.addEventListener("load", showSlides);