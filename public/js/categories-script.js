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

//Sort
const dropdowns = document.querySelectorAll(".dropdown-categories");

dropdowns.forEach((dropdown) => {
    const select = dropdown.querySelector(".select-categories");
    const caret = dropdown.querySelector(".caret-categories");
    const menu = dropdown.querySelector(".menu-categories");
    const options = dropdown.querySelectorAll(".menu-categories li");
    const selected = dropdown.querySelector(".selected-categories");

    select.addEventListener("click", () => {
        select.classList.toggle("select-categories-clicked");
        caret.classList.toggle("caret-categories-rotate");
        menu.classList.toggle("menu-categories-open");
    });
    options.forEach((option) => {
        option.addEventListener("click", () => {
            selected.innerText = option.innerText;
            select.classList.remove("select-categories-clicked");
            caret.classList.remove("caret-categories-rotate");
            menu.classList.remove("menu-categories-open");
            options.forEach((option) => {
                option.classList.remove("active");
            });
            option.classList.add("active");
        });
    });
});
//End of Sort
