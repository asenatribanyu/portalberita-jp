// Sort
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
                option.classList.remove("active-dropdown");
            });
            option.classList.add("active-dropdown");
        });
    });
});
// End of Sort
