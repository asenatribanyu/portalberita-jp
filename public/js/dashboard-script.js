//Old Photo
function PreviewImage() {
    const image = document.querySelector("#formFile");
    const imgpreview = document.querySelector(".img-preview");
    imgPreview.style.display = "block";
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
//End of Old Photo

//Checkbox
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(
        ".form-check-input.cat#checkTag"
    );

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("click", (event) => {
            let checkedBoxes = document.querySelectorAll(
                "input.form-check-input.cat#checkTag:checked"
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

//Trix
(function () {
    var HOST = "/dashboard/article/uploadtrix"; //pass the route

    addEventListener("trix-attachment-add", function (event) {
        if (event.attachment.file) {
            uploadFileAttachment(event.attachment);
        }
    });

    function uploadFileAttachment(attachment) {
        uploadFile(attachment.file, setProgress, setAttributes);

        function setProgress(progress) {
            attachment.setUploadProgress(progress);
        }

        function setAttributes(attributes) {
            attachment.setAttributes(attributes);
        }
    }

    function uploadFile(file, progressCallback, successCallback) {
        var formData = createFormData(file);
        var xhr = new XMLHttpRequest();

        xhr.open("POST", HOST, true);
        xhr.setRequestHeader("X-CSRF-TOKEN", getMeta("csrf-token"));

        xhr.upload.addEventListener("progress", function (event) {
            var progress = (event.loaded / event.total) * 100;
            progressCallback(progress);
        });

        xhr.addEventListener("load", function (event) {
            var attributes = {
                url: xhr.responseText,
                href: xhr.responseText + "?content-disposition=attachment",
            };
            successCallback(attributes);
        });

        xhr.send(formData);
    }

    function createFormData(file) {
        var data = new FormData();
        data.append("Content-Type", file.type);
        data.append("file", file);
        return data;
    }

    function getMeta(metaName) {
        const metas = document.getElementsByTagName("meta");

        for (let i = 0; i < metas.length; i++) {
            if (metas[i].getAttribute("name") === metaName) {
                return metas[i].getAttribute("content");
            }
        }

        return "";
    }
})();

// Reset File Form
function resetFileInput() {
    document.getElementById("formFile").value = "";
    document.getElementById("video-link").value = "";
}
// End of Reset File Form
