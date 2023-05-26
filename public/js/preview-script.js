//Image Popup
const images = document.querySelectorAll("figure");
const pop = document.querySelector(".popup");

function isMobileOrTablet() {
    const mobileQuery = window.matchMedia("(max-width: 767px)");
    const tabletQuery = window.matchMedia(
        "(min-width: 768px) and (max-width: 1024px)"
    );
    return mobileQuery.matches || tabletQuery.matches;
}

images.forEach((img) => {
    img.addEventListener("click", () => {
        if (!isMobileOrTablet()) {
            img.classList.add("active");
            pop.classList.add("active");
        }
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
