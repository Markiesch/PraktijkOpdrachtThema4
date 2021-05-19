/*
    Author: Mark Schuurmans
    Date: 12-5-2021

    Praktijkopdracht Thema 4
*/

let lastScrollTop = 0;
const navbar = document.querySelector("header nav");

window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop && window.pageYOffset > 400) {
        navbar.style.transform = "translateY(-200%)";
    } else {
        navbar.style.transform = "translateY(0)";
    }
    lastScrollTop = scrollTop;
});
