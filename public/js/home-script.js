// Carousel
document.querySelectorAll(".carousel").forEach((carousel) => {
    const carouselSlides = carousel.querySelectorAll(".carousel-slides");
    const carouselNext = carousel.querySelectorAll(".carousel-nav-right");
    const carouselPrev = carousel.querySelectorAll(".carousel-nav-left");
    let currentSlide = 0;

    carouselNext.forEach((next, i) => {
        next.addEventListener("click", () => {
            carouselSlides[currentSlide].classList.remove("carousel-selected");
            currentSlide = (currentSlide + 1) % carouselSlides.length;

            carouselSlides[currentSlide].classList.add("carousel-selected");
        });
    });

    carouselPrev.forEach((prev, i) => {
        prev.addEventListener("click", () => {
            carouselSlides[currentSlide].classList.remove("carousel-selected");
            currentSlide =
                (currentSlide - 1 + carouselSlides.length) %
                carouselSlides.length;
            carouselSlides[currentSlide].classList.add("carousel-selected");
        });
    });

    carouselSlides[0].classList.add("carousel-selected");

    slideInterval = setInterval(() => {
        carouselNext[2].click();
    }, 5000);

    carousel.addEventListener("mouseover", () => {
        clearInterval(slideInterval);
    });

    carousel.addEventListener("mouseout", () => {
        slideInterval = setInterval(() => {
            carouselNext[2].click();
        }, 5000);
    });
});
// End of Carousel
