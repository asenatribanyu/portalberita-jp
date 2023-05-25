//Image Popup
const images = document.querySelectorAll("figure img");
const pop = document.querySelector(".popup");

images.forEach((img) => {
    img.addEventListener("click", () => {
        img.classList.add("active");
        pop.classList.add("active");
    });
});

document.addEventListener("click", (event) => {
    if (!event.target.closest("figure")) {
        images.forEach((img) => {
            img.classList.remove("active");
            pop.classList.remove("active");
        });
    }
});
//End of Image Popup
