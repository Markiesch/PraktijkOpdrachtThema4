const bubble = document.querySelector(".bubble");
const link = document.querySelector(".inlog--link");
const transitionTime = 600;

link.addEventListener("click", (e) => {
    e.preventDefault();

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
    }, 10);
}

function transitionEnd() {
    setTimeout(() => {
        window.location = "/PraktijkOpdrachtThema4/pages/login.php";
    }, transitionTime * 1.5);
}
