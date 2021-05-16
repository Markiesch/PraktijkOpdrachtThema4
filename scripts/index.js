const logInScreen = document.querySelector(".login--container");
const exitBtn = document.querySelector(".exit-btn");
const link = document.querySelector(".inlog--link");

link.addEventListener("click", toggleMenu);
exitBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
    logInScreen.classList.toggle("open");
}
