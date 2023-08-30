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
    }, 4000);

    photos.addEventListener("mouseover", () => {
        clearInterval(slideInterval);
    });

    photos.addEventListener("mouseout", () => {
        slideInterval = setInterval(() => {
            photosNext[2].click();
        }, 4000);
    });
});
// End of Photos Slider
