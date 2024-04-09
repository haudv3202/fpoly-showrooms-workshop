document.addEventListener("DOMContentLoaded", function () {
    // Xử lý khi chọn tệp tin
    document
        .getElementById("project-thumbnail-img")
        .addEventListener("change", function () {
            var images = this.files;
            var imagePreview = document.getElementById("imagePreview");
            imagePreview.innerHTML = ""; // Xóa hình ảnh trước đó (nếu có)
            for (var i = 0; i < images.length; i++) {
                var reader = new FileReader();
                var add = 0;
                reader.onload = function (e) {
                    var imageElement = `<div class="col-4 col-md-2 mb-3">
                        <div class="img-thumbnail">
                            <button
                                type="button"
                                class="close remove-icon"
                                aria-label="Close"
                                onclick="deleteImage(${add})"
                                data-toggle="modal"
                                data-target="#confirmDeleteModal"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <img class="w-100" style="min-height: 100px;max-height: 100px; object-fit: cover;" src="${e.target.result}" alt="Descriptive Alt Text" />
                        </div>
                    </div>`;
                    add++;
                    imagePreview.insertAdjacentHTML("beforeend", imageElement);
                };
                reader.readAsDataURL(images[i]);
            }
        });
});

function deleteImage(addr) {
    if (confirm("Are you sure you want to delete")) {
        var inputFile = document.getElementById("project-thumbnail-img");
        var images = inputFile.files;
        var imagesArray = Array.from(images);
        imagesArray.splice(addr, 1);
        // Create a new DataTransfer object
        var dataTransfer = new DataTransfer();
        // Add files to the DataTransfer object
        imagesArray.forEach(function (file) {
            dataTransfer.items.add(file);
        });
        // Use the DataTransfer object to create a new FileList
        var newFileList = dataTransfer.files;

        // Assign the new FileList to the input element
        inputFile.files = newFileList;

        var imagePreview = document.getElementById("imagePreview");
        imagePreview.innerHTML = ""; // Xóa hình ảnh trước đó (nếu có)
        for (var i = 0; i < inputFile.files.length; i++) {
            var reader = new FileReader();
            var add = 0;
            reader.onload = function (e) {
                var imageElement = `<div class="col-4 col-md-2 mb-3">
                        <div class="img-thumbnail">
                            <button
                                type="button"
                                aria-label="Close"
                                onclick="deleteImage(${add})"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <img class="w-100" style="min-height: 100px;max-height: 100px; object-fit: cover;" src="${e.target.result}" alt="Descriptive Alt Text" />
                        </div>
                    </div>`;
                add++;
                imagePreview.insertAdjacentHTML("beforeend", imageElement);
            };
            reader.readAsDataURL(images[i]);
        }
    }
}
