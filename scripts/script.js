/*
    Author: Mark Schuurmans
    Date: 12-5-2021

    Praktijkopdracht Thema 4
*/

let lastScrollTop = 0;
// Aanspreken DOM elementen
const navbar = document.querySelector("header nav");

window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    // Deze if wordt uitgevoerd wanneer je verder dan 400px naar beneden scrollt
    if (scrollTop > lastScrollTop && window.pageYOffset > 400) {
        navbar.style.transform = "translateY(-200%)";
    } else {
        navbar.style.transform = "translateY(0)";
    }
    lastScrollTop = scrollTop;
});
