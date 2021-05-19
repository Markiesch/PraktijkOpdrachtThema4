/*
    Author: Mark Schuurmans
    Date: 19-5-2021

    Praktijkopdracht Thema 4
*/

const lock = `
<svg viewBox="0 0 448 512">
    <path fill="#acacac" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
</svg>`;
const unlock = `
<svg viewBox="0 0 576 512">
    <path fill="#acacac" d="M423.5 0C339.5.3 272 69.5 272 153.5V224H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48h-48v-71.1c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v80c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-80C576 68 507.5-.3 423.5 0z"></path>
</svg>`;

const passwordSvg = document.querySelector(".password--svg");
const input = document.querySelector(".password--input");

passwordSvg.addEventListener("click", () => {
    passwordSvg.data = "../images/unlock.svg";
    const newType = input.type == "password" ? "text" : "password";
    const icon = input.type == "password" ? unlock : lock;
    passwordSvg.innerHTML = icon;
    input.type = newType;
});
