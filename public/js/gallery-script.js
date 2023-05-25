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
const popupImage = imgPopup.querySelector("img");
const popupCaption = imgPopup.querySelector(".popup-caption p");
const visitButton = imgPopup.querySelector(".visit");
const deleteButton = imgPopup.querySelector(".delete");

imgList.forEach((img) => {
    img.addEventListener("click", () => {
        // Get the necessary data from the clicked grid item
        const src = img.getAttribute("src");
        const caption = img.getAttribute("data-caption");
        const slug = img.getAttribute("data-slug");
        const deleted = img.getAttribute("data-delete");

        // Update the image source, caption, and slug in the popup
        popupImage.src = src;
        popupCaption.textContent = caption;
        visitButton.href = `/categories${slug}`;

        imgPopup.classList.add("active");
    });
});

imgPopup.addEventListener("click", (event) => {
    if (event.target === imgPopup) {
        imgPopup.classList.remove("active");
    }
});
//End of Image Popup
