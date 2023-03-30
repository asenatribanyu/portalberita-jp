// Checkbox
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".form-check-input");

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("click", (event) => {
            let checkedBoxes = document.querySelectorAll(
                "input[type=checkbox]:checked"
            );
            if (checkedBoxes.length >= 3) {
                checkboxes.forEach((cb) => {
                    if (!cb.checked) {
                        cb.disabled = true;
                    } else {
                        cb.disabled = false;
                    }
                });
            } else {
                checkboxes.forEach((cb) => {
                    cb.disabled = false;
                });
            }
        });
    });
});
//End of Checkbox
