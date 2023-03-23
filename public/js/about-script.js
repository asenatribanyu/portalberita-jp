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

// Photos Slider
document.querySelectorAll(".photos").forEach((photos) => {
    const photosSlides = photos.querySelectorAll(".photos-slider");
    const photosNext = photos.querySelectorAll(".photos-nav-right");
    const photosPrev = photos.querySelectorAll(".photos-nav-left");
    let currentSlide = 0;

    photosNext.forEach((next, i) => {
        next.addEventListener("click", () => {
            photosSlides[currentSlide].classList.remove("photos-selected");
            currentSlide = (currentSlide + 1) % photosSlides.length;

            photosSlides[currentSlide].classList.add("photos-selected");
        });
    });

    photosPrev.forEach((prev, i) => {
        prev.addEventListener("click", () => {
            photosSlides[currentSlide].classList.remove("photos-selected");
            currentSlide =
                (currentSlide - 1 + photosSlides.length) % photosSlides.length;
            photosSlides[currentSlide].classList.add("photos-selected");
        });
    });

    photosSlides[0].classList.add("photos-selected");

    slideInterval = setInterval(() => {
        photosNext[2].click();
    }, 3000);

    photos.addEventListener("mouseover", () => {
        clearInterval(slideInterval);
    });

    photos.addEventListener("mouseout", () => {
        slideInterval = setInterval(() => {
            photosNext[2].click();
        }, 3000);
    });
});
// End of Photos Slider
