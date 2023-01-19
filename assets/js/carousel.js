export const carousel = (id) => {
    const carouselPrincipal = document.querySelector(`${id}`);
    if (carouselPrincipal == null) { return }

    const buttons = [...carouselPrincipal.children];                //Almacenamos los hijos de padre carousel
    const anterior = buttons.length - 2;                            //el boton de previo siempre es el hijo penultimo del array
    const siguiente = buttons.length - 1;                           //el boton de previo siempre es el hijo antepenultimo del array
    const clase = carouselPrincipal.children[0].classList.value;    //tomo el nombre del primer hijo, y se lo pasa al showSlides
    const interval = carouselPrincipal.attributes;
    let slideIndex = 1;

    showSlides(slideIndex);

    carouselPrincipal.addEventListener("click", evento =>{   //determina cual de sus dos hijos ultimos (prev, next) fue clikeado
        const btn = evento.target;
        const index = buttons.indexOf(btn);
        console.log(index);
        if (index == -1)return
        if (index == anterior)plusSlides(-1)
        if (index == siguiente)plusSlides(1)
    });    

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName(`${clase}`);
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";            
        }
        slides[slideIndex - 1].style.display = "block";
    }
    
    if (interval[2].value!=0) {
        setInterval(() => {
            plusSlides(1);
        }, `${interval[2].value}`);
    }
}