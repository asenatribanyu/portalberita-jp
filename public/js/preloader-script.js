// Preloader
const tl = gsap.timeline();

tl.to("body", {
    duration: 0.1,
    css: { overflowY: "hidden" },
    ease: "power3.inOut",
})

    .to(".text-container", {
        duration: 0,
        opacity: 1,
        ease: "Power3.easeOut",
    })

    .from(".text-container span", {
        duration: 1,
        delay: 0.5,
        y: 200,
        skewY: 15,
        stagger: 0.4,
        ease: "Power3.easeOut",
    })

    .to(".text-container span", {
        duration: 1,
        delay: 1,
        y: -200,
        skewY: -15,
        stagger: 0.4,
        ease: "Power3.easeOut",
    })

    .to("body", {
        duration: 0.1,
        delay: 0.8,
        css: { overflowY: "scroll" },
        ease: "power3.inOut",
    })

    .to(
        ".preloader",
        {
            duration: 1.5,
            delay: 0.5,
            height: "0vh",
            ease: "Power3.easeOut",
        },
        "-=2"
    )

    .to(".preloader", {
        duration: 0,
        css: { display: "none" },
    });
// End of Preloader

window.addEventListener("load", function () {
    // Data has finished loading, hide preloader
    tl.play();
});
