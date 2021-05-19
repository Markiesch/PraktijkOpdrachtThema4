/*
    Author: Mark Schuurmans
    Date: 12-5-2021

    Praktijkopdracht Thema 4
*/

const bubble = document.querySelector(".bubble");
const link = document.querySelector(".inlog--link");
const transitionTime = 600;

link.addEventListener("click", (e) => {
    // Verwijderd de functionaliteit van het href atribuut
    e.preventDefault();

    // Zet het bubble element op de plek waar de gebruiker heeft geclicked
    bubble.style.left = `${e.clientX}px`;
    bubble.style.top = `${e.clientY}px`;
    bubble.style.width = `0`;
    bubble.style.height = `0`;

    dotEnlarge();
    transitionEnd();
});

function dotEnlarge() {
    setTimeout(() => {
        bubble.style.transition = `${transitionTime}ms ease-in-out all`;
        bubble.style.width = `125vw`;
        bubble.style.height = `125vw`;
        bubble.style.left = `50%`;
        bubble.style.top = `50%`;
        // Geeft de bovenstaande code 10milisec delay
    }, 10);
}

function transitionEnd() {
    setTimeout(() => {
        // Stuurt de gebruiker naar de login pagina
        window.location = "/PraktijkOpdrachtThema4/pages/login.php";
    }, transitionTime * 1.5);
}
