//Seach Box
const input = document.querySelector(".search-form input");
input.addEventListener("keydown", function (event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        const form = document.querySelector(".search-form");
        form.submit();
    }
});
//End of Search Box
