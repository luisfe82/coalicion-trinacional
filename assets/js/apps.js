import {carousel} from './carousel.js';
import {menu} from './menu.js';
import { valida } from './validaciones.js';

carousel("#carousel-principal");
carousel("#carouselOrganiza");
carousel("#carouselAnuncios");
carousel("#carouselVideos");
carousel("#carouselVisitas");
carousel("#carouselGaleria");
carousel("#carouselAcciones");
carousel("#carouselColaboracion");
carousel("#carouselCampania");
carousel("#carouselForos");
carousel("#carouselConferencias");
carousel("#carouselSolidaridad");

menu();


const inputs = document.querySelectorAll("input");
const textareas = document.querySelectorAll("textarea");

inputs.forEach((input) => {
  input.addEventListener("blur", (input) => {
    valida(input.target);
  });
});

textareas.forEach((textarea) => {
  textarea.addEventListener("blur", (textarea) => {
    valida(textarea.target);
  });
});