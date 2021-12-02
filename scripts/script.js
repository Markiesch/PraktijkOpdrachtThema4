let lastScrollTop = 0;
const navbar = document.querySelector("header nav");

window.addEventListener("scroll", () => {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  navbar.style.transform = scrollTop > lastScrollTop && window.pageYOffset > 400 ? "translateY(-200%)" : "translateY(0)";
  lastScrollTop = scrollTop;
});
