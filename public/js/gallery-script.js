//Image Layout
var grid = document.querySelector(".grid");
var msnry;

imagesLoaded(grid, function () {
    msnry = new Masonry(grid, {
        itemSelector: ".grid-item",
        columnWidth: ".grid-sizer",
        percentPosition: true,
    });
});
//End of Image Layout

//Image Popup
const imgList = document.querySelectorAll(".img-list");
const imgPopup = document.querySelector(".img-popup");

imgList.forEach((img) => {
    img.addEventListener("click", () => {
        imgPopup.classList.add("active");
    });
});

imgPopup.addEventListener("click", (event) => {
    if (event.target === imgPopup) {
        imgPopup.classList.remove("active");
    }
});
//End of Image Popup
