export const menu = () => {
    //------------------------ Codigo que habre y da efecto al botn de hamburger
    const botonMenu = document.querySelector("[data-botonMenu]");
    const lineaHaburger = document.querySelectorAll("[data-linea]")

    botonMenu.addEventListener("click", () => {
        const mostrar = document.querySelector("[data-navbar]");
        mostrar.classList.toggle("no-mostrar");
        lineaHaburger.forEach(element => {
            element.classList.toggle("linea")
            element.classList.toggle("linea2");
        });
    })

    //------------------------ codigo que permite el poder seleccionar un sub menu
    const itemLinks = document.querySelectorAll(".item-links");
    const links = document.querySelectorAll(".navbar__dropdown-content");


    itemLinks.forEach((evento) => {
        evento.addEventListener("click", () => {
            links[evento.id].classList.toggle('submenu');
            cerrarSub(evento.id);
        });
    });

    function cerrarSub(id) {
        for (let i = 0; i < itemLinks.length; i++) {
            if (!links[i].classList.contains('submenu') && i != id) {
                links[i].classList.toggle('submenu');
            }
        }
    }
}
