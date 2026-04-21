document.addEventListener("DOMContentLoaded", function () {

    const hero = document.getElementById("hero");

    const imagenes = [
        "/img/img1.jpg",
        "/img/img2.jpg"
    ];

    let index = 0;

    hero.style.backgroundImage = `url('${imagenes[index]}')`;

    function cambiarFondo() {
        index++;

        if (index >= imagenes.length) {
            index = 0;
        }

        hero.style.backgroundImage = `url('${imagenes[index]}')`;
    }

    setInterval(cambiarFondo, 6000);

});