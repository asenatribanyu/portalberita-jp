// Navigation Bar
const nav = document.querySelector("nav");
const body = document.querySelector("body");
const searchToggle = document.querySelector(".searchToggle");
const sidebarC = document.querySelector(".side-close");
const sidebarO = document.querySelector(".side-open");

searchToggle.addEventListener("click", () => {
    searchToggle.classList.toggle("active");
});

sidebarO.addEventListener("click", () => {
    nav.classList.add("active");
});

body.addEventListener("click", (e) => {
    let clicked = e.target;

    if (
        !clicked.classList.contains("side-open") &&
        !clicked.classList.contains("menu")
    ) {
        nav.classList.remove("active");
    }
});
// End of Navigation Bar
