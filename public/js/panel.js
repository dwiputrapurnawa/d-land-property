$(function () {
    const chipContainer = $("#chip-container"); // The container holding chips and the input
    const chipInput = $("#chip-input"); // The input field for new chips
    const hiddenTags = $("#hidden-tags"); // Hidden input to store chip values

    if (hiddenTags.length) {
        // Initialize chips from hidden input
        if (hiddenTags.val() != "") {
            const initValue = hiddenTags.val().split(",");

            initValue.forEach(function (value) {
                const chip = $(`
                  <span class="chip flex items-center bg-blue-100 text-blue-600 px-3 py-1 rounded-full m-1">
                    ${value}
                    <button
                      type="button"
                      class="ml-2 text-blue-600 hover:text-blue-800 remove-chip"
                    >
                      ×
                    </button>
                  </span>
                `);

                chipContainer.prepend(chip); // Add the chip to the container
            });
        }
    }

    // Clear all chips when the 'Clear all'

    // Function to update the hidden input field
    function updateHiddenTags() {
        const chips = [];
        chipContainer.find(".chip").each(function () {
            chips.push($(this).text().trim().slice(0, -1)); // Extract chip text, removing the '×'
        });
        hiddenTags.val(chips.join(",")); // Set the comma-separated chip values
    }

    // Add a chip when Enter is pressed
    chipInput.on("keypress", function (e) {
        if (e.key === "Enter" && chipInput.val().trim() !== "") {
            e.preventDefault(); // Prevent form submission on Enter

            const value = chipInput.val().trim(); // Get the input value
            const chip = $(`
          <span class="chip flex items-center bg-blue-100 text-blue-600 px-3 py-1 rounded-full m-1">
            ${value}
            <button
              type="button"
              class="ml-2 text-blue-600 hover:text-blue-800 remove-chip"
            >
              ×
            </button>
          </span>
        `);

            chipContainer.prepend(chip); // Add the chip to the container
            chipInput.val(""); // Clear the input field
            updateHiddenTags(); // Update the hidden input field
        }
    });

    // Remove a chip when the '×' button is clicked
    chipContainer.on("click", ".remove-chip", function () {
        $(this).parent(".chip").remove(); // Remove the chip element
        updateHiddenTags(); // Update the hidden input field
    });

    $(".price-input").on("input", function () {
        let value = $(this).val();

        // Remove non-numeric characters
        value = value.replace(/[^0-9]/g, "");

        // Add commas as thousand separators
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        // Update the input value
        $(this).val(value);
    });

    $('[name="phone"]').inputmask({
        mask: "+62 999-9999-9999", // Adding +62 prefix
        placeholder: " ",
        showMaskOnHover: false,
        showMaskOnFocus: false,
        clearMaskOnLostFocus: false,
        onBeforePaste: function (pastedValue, opts) {
            // Remove any non-numeric characters when pasting, and ensure the +62 prefix is preserved
            pastedValue = pastedValue.replace(/\D/g, "");
            return "+62" + pastedValue.slice(-12); // Ensure it's a 12-digit number after the prefix
        },
    });

    if ($("#description-editor").length > 0) {
        const quill = new Quill("#description-editor", {
            modules: {
                toolbar: [
                    [
                        { font: [] },
                        { size: ["small", "normal", "large", "huge"] },
                    ],
                    [{ header: "1" }, { header: "2" }],
                    ["bold", "italic", "underline"],
                    [{ script: "sub" }, { script: "super" }],
                ],
            },
            theme: "snow", // or 'bubble'
        });

        // Listen for Quill's `text-change` event
        quill.on("text-change", function (delta, oldDelta, source) {
            var content = quill.root.innerHTML;

            // Trigger a custom jQuery event
            $("#description-editor").trigger("descEditorChange", content);
        });

        // Use jQuery to listen for the custom event
        $("#description-editor").on("descEditorChange", function (e, content) {
            $("[name='description']").val(content);
        });
    }

    if ($("#editor").length > 0) {
        const upload_img_url = $("[name='upload-img']").val();
        const quill = new Quill("#editor", {
            modules: {
                toolbar: [
                    [
                        { font: [] },
                        { size: ["small", "normal", "large", "huge"] },
                    ],
                    [{ header: "1" }, { header: "2" }],
                    ["bold", "italic", "underline"],
                    [{ script: "sub" }, { script: "super" }],
                    [{ align: [] }],
                    ["link", "blockquote", "code-block"],
                    [{ list: "ordered" }, { list: "bullet" }],
                    [{ indent: "-1" }, { indent: "+1" }],
                    ["image"],
                    ["color", "background"],
                    ["clean"],
                ],
            },
            theme: "snow", // or 'bubble'
        });

        // Listen for Quill's `text-change` event
        quill.on("text-change", function (delta, oldDelta, source) {
            var content = quill.root.innerHTML;

            // Trigger a custom jQuery event
            $("#editor").trigger("editorChange", content);
        });

        // Use jQuery to listen for the custom event
        $("#editor").on("editorChange", function (e, content) {
            $("[name='content']").val(content);
        });

        // Handle image insertion
        var toolbar = quill.getModule("toolbar");
        toolbar.addHandler("image", function () {
            var fileInput = document.createElement("input");
            fileInput.setAttribute("type", "file");
            fileInput.setAttribute("accept", "image/*");
            fileInput.click();

            fileInput.onchange = function () {
                var file = fileInput.files[0];
                if (file) {
                    var formData = new FormData();
                    formData.append("image", file);

                    // Send image to the Laravel backend
                    $.ajax({
                        url: upload_img_url,
                        type: "POST",
                        data: formData,
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ), // Include CSRF token in the request
                        },
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            if (response.success) {
                                // Insert the uploaded image URL into the editor
                                var imageUrl = response.url;
                                var range = quill.getSelection();
                                quill.insertEmbed(
                                    range.index,
                                    "image",
                                    imageUrl
                                );
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Image upload failed.",
                                });
                            }
                        },
                        error: function () {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Error uploading image.",
                            });
                        },
                    });
                }
            };
        });
    }

    function capitalizeFirstLetter(str) {
        if (!str) return str; // Return empty string if input is empty
        return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase();
    }
    // Event delegation for dropdown toggle
    $(document).on("click", "#menu-button", function (event) {
        // Prevent the event from bubbling up to the document (which would trigger closing the menu)
        event.stopPropagation();

        // Toggle the 'hidden' class to show or hide the dropdown menu
        $(this).next(".dropdown-menu").toggleClass("hidden");
    });

    // Close the dropdown if clicked outside
    $(document).on("click", function (event) {
        if (!$(event.target).closest("#menu-button, .dropdown-menu").length) {
            $(".dropdown-menu").addClass("hidden");
        }
    });

    const url_project = $("#table-project").data("url");
    const url_news = $("#table-news").data("url");
    const url_consultation = $("#table-consultation").data("url");
    const url_project_presentation = $("#table-project-presentation").data(
        "url"
    );

    $("#table-news").DataTable({
        processing: true,
        serverSide: true,
        columns: [
            { data: "no" },
            { data: "title" },
            { data: "status" },
            { data: "created_at" },
            { data: "action" },
        ],
        ajax: {
            url: url_news,
            type: "GET",
        },
        columnDefs: [
            {
                targets: 3,
                render: function (data, type, row) {
                    // Format the date (assuming data is in ISO format)
                    if (type === "display") {
                        return new Date(data).toLocaleDateString("en-GB", {
                            day: "2-digit",
                            month: "short",
                            year: "numeric",
                        }); // Format as mm/dd/yyyy
                    }
                    return data; // For other types (sorting, etc.), return original
                },
            },
            {
                targets: 2,
                render: function (data, type, row) {
                    if (type === "display") {
                        if (data == "draft") {
                            return `<span class='bg-blue-300 px-1 py-2 text-white rounded w-150'>${capitalizeFirstLetter(
                                data
                            )}</span>`;
                        } else if (data == "publish") {
                            return `<span class='bg-green-300 px-1 py-2 text-white rounded w-150'>${capitalizeFirstLetter(
                                data
                            )}</span>`;
                        }
                    }

                    return data;
                },
            },
            {
                targets: -1,
                title: "Action",
                responsivePriority: 1,
                orderable: false,
                render: function (data, type, full, meta) {
                    var action_button = full.action;
                    var dropdown_item = "";

                    Object.entries(action_button).forEach(function (
                        item,
                        index
                    ) {
                        if (item[0] == "publish" || item[0] == "delete") {
                            dropdown_item += `<button data-action="${item[0]}" data-url="${item[1]["url"]}"  class="action-btn text-gray-700 block px-4 py-2 text-sm ${item[1]["visibility"]}">${item[1]["label"]}</button>`;
                        } else {
                            dropdown_item += `<a href="${item[1]["url"]}"  class="text-gray-700 block px-4 py-2 text-sm ${item[1]["visibility"]}">${item[1]["label"]}</a>`;
                        }
                    });

                    return ` <div class="relative inline-block text-left">
                            <button type="button" id="menu-button" class="inline-flex justify-center w-full rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                            Actions
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7l7 7 7-7" />
                            </svg>
                            </button>
                            <div class="z-50 dropdown-menu hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                ${dropdown_item}
                            </div>
                            </div>
                        </div>`;
                },
            },
        ],
        pageLength: 10,
    });
    $("#table-project").DataTable({
        processing: true,
        serverSide: true,
        columns: [
            { data: "no" },
            { data: "project_name" },
            { data: "status" },
            { data: "created_at" },
            { data: "action" },
        ],
        ajax: {
            url: url_project,
            type: "GET",
        },
        columnDefs: [
            {
                targets: 3, // Apply customization on the 4th column (index 3)
                render: function (data, type, row) {
                    // Format the date (assuming data is in ISO format)
                    if (type === "display") {
                        return new Date(data).toLocaleDateString("en-GB", {
                            day: "2-digit",
                            month: "short",
                            year: "numeric",
                        }); // Format as mm/dd/yyyy
                    }
                    return data; // For other types (sorting, etc.), return original
                },
            },
            {
                targets: 2,
                render: function (data, type, row) {
                    if (type === "display") {
                        if (data == "draft") {
                            return `<span class='bg-blue-300 px-1 py-2 text-white rounded w-150'>${capitalizeFirstLetter(
                                data
                            )}</span>`;
                        } else if (data == "publish") {
                            return `<span class='bg-green-300 px-1 py-2 text-white rounded w-150'>${capitalizeFirstLetter(
                                data
                            )}</span>`;
                        }
                    }

                    return data;
                },
            },
            {
                targets: -1,
                title: "Action",
                responsivePriority: 1,
                orderable: false,
                render: function (data, type, full, meta) {
                    var action_button = full.action;
                    var dropdown_item = "";

                    Object.entries(action_button).forEach(function (
                        item,
                        index
                    ) {
                        if (item[0] == "publish" || item[0] == "delete") {
                            dropdown_item += `<button data-action="${item[0]}" data-url="${item[1]["url"]}"  class="action-btn text-gray-700 block px-4 py-2 text-sm ${item[1]["visibility"]}">${item[1]["label"]}</button>`;
                        } else {
                            dropdown_item += `<a href="${item[1]["url"]}"  class="text-gray-700 block px-4 py-2 text-sm ${item[1]["visibility"]}">${item[1]["label"]}</a>`;
                        }
                    });

                    return ` <div class="relative inline-block text-left">
                            <button type="button" id="menu-button" class="inline-flex justify-center w-full rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                            Actions
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7l7 7 7-7" />
                            </svg>
                            </button>
                            <div class="z-50 dropdown-menu hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                ${dropdown_item}
                            </div>
                            </div>
                        </div>`;
                },
            },
        ],
        pageLength: 10,
    });

    $("#table-project-presentation").DataTable({
        processing: true,
        serverSide: true,
        columns: [
            { data: "no" },
            { data: "phone" },
            { data: "created_at" },
            { data: "action" },
        ],
        ajax: {
            url: url_project_presentation,
            type: "GET",
        },
        columnDefs: [
            {
                targets: 2, // Apply customization on the 4th column (index 3)
                render: function (data, type, row) {
                    // Format the date (assuming data is in ISO format)
                    if (type === "display") {
                        return new Date(data).toLocaleDateString("en-GB", {
                            day: "2-digit",
                            month: "short",
                            year: "numeric",
                        }); // Format as mm/dd/yyyy
                    }
                    return data; // For other types (sorting, etc.), return original
                },
            },
            {
                targets: -1,
                title: "Action",
                responsivePriority: 1,
                orderable: false,
                render: function (data, type, full, meta) {
                    var action_button = full.action;

                    return `
                   <a 
                    href="${action_button.url}"
                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition duration-300 ease-in-out"
                    target="_blank"
                >
                    <svg 
                    xmlns="http://www.w3.org/2000/svg" 
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke-width="2" 
                    stroke="currentColor" 
                    class="w-5 h-5"
                    >
                    <path 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        d="M21 12.5l-8.5 8.5m0 0l-8.5-8.5m8.5 8.5V3"
                    />
                    </svg>
                    ${action_button.label}
                </a>
                    `;
                },
            },
        ],
        pageLength: 10,
    });

    $("#table-consultation").DataTable({
        processing: true,
        serverSide: true,
        columns: [
            { data: "no" },
            { data: "name" },
            { data: "email" },
            { data: "phone" },
            { data: "messenger" },
            { data: "created_at" },
            { data: "action" },
        ],
        ajax: {
            url: url_consultation,
            type: "GET",
        },
        columnDefs: [
            {
                targets: 5, // Apply customization on the 4th column (index 3)
                render: function (data, type, row) {
                    // Format the date (assuming data is in ISO format)
                    if (type === "display") {
                        return new Date(data).toLocaleDateString("en-GB", {
                            day: "2-digit",
                            month: "short",
                            year: "numeric",
                        }); // Format as mm/dd/yyyy
                    }
                    return data; // For other types (sorting, etc.), return original
                },
            },
            {
                targets: -1,
                title: "Action",
                responsivePriority: 1,
                orderable: false,
                render: function (data, type, full, meta) {
                    var action_button = full.action;

                    return `
                   <a 
                    href="${action_button.url}"
                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition duration-300 ease-in-out"
                    target="_blank"
                >
                    <svg 
                    xmlns="http://www.w3.org/2000/svg" 
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke-width="2" 
                    stroke="currentColor" 
                    class="w-5 h-5"
                    >
                    <path 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        d="M21 12.5l-8.5 8.5m0 0l-8.5-8.5m8.5 8.5V3"
                    />
                    </svg>
                    ${action_button.label}
                </a>
                    `;
                },
            },
        ],
        pageLength: 10,
    });

    $("#image").on("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $("#previewImage").attr("src", e.target.result);
                $("#previewContainer").removeClass("hidden");
            };
            reader.readAsDataURL(file);
        } else {
            $("#previewContainer").addClass("hidden");
        }
    });
    $("#image").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $("#file-name").text(fileName ? fileName : "No file chosen");
    });

    // Trigger file input click when the button is clicked
    $(".file-upload-btn").on("click", function () {
        $("#image").click();
    });

    $(document).on("click", ".action-btn", function () {
        const url = $(this).data("url");
        const table = $(this).closest("table");
        const action = $(this).data("action");

        if (action == "publish") {
            Swal.fire({
                title: "Are you sure?",
                text: "You will publish this item?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url, // The URL to send the request to
                        type: "GET", // The HTTP method (GET, POST, PUT, DELETE, etc.)
                        success: function (response) {
                            // The function to execute if the request is successful
                            console.log("Success:", response);

                            // Update the table with the new data
                            table.DataTable().ajax.reload();

                            Swal.fire(
                                "Confirmed!",
                                "Your action has been confirmed.",
                                "success"
                            );
                        },
                        error: function (xhr, status, error) {
                            // The function to execute if the request fails
                            console.log("Error:", error);

                            Swal.fire(
                                "Cancelled",
                                "Your action has been cancelled.",
                                "error"
                            );
                        },
                    });
                }
            });
        } else if (action == "delete") {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url, // The URL to send the request to
                        type: "DELETE", // The HTTP method (GET, POST, PUT, DELETE, etc.)
                        data: {
                            _token: $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        success: function (response) {
                            // The function to execute if the request is successful
                            console.log("Success:", response);

                            // Update the table with the new data
                            table.DataTable().ajax.reload();

                            Swal.fire(
                                "Confirmed!",
                                "Your action has been confirmed.",
                                "success"
                            );
                        },
                        error: function (xhr, status, error) {
                            // The function to execute if the request fails
                            console.log("Error:", error);

                            Swal.fire(
                                "Cancelled",
                                "Your action has been cancelled.",
                                "error"
                            );
                        },
                    });
                }
            });
        }
    });

    // Array for existing images (loaded from the server)
    let existingImages = $("[name='old_images']").length
        ? JSON.parse($('[name="old_images"]').val())
        : [];

    // Array for newly selected files
    let selectedFiles = [];

    // Combined array to track all images (existing + new)
    let totalImages = [...existingImages];

    // Function to update the input files
    function updateInputFiles() {
        const dataTransfer = new DataTransfer();
        $.each(selectedFiles, function (index, file) {
            dataTransfer.items.add(file);
        });
        $("#imageInput")[0].files = dataTransfer.files;
    }

    // Function to render all images
    function renderImages() {
        $("#previewContainerImages").empty();
        totalImages.forEach((item, index) => {
            const previewDiv = $("<div>").addClass("image-preview-container");

            const imagePreviewDiv = $("<div>").addClass(
                "image-preview relative"
            );
            const imgElement = $("<img>")
                .attr(
                    "src",
                    (item.image_path
                        ? window.location.origin + "/storage/" + item.image_path
                        : null) || URL.createObjectURL(item.file)
                )
                .addClass("w-full h-full object-cover rounded-md");

            const deleteButton = $("<button>")
                .addClass("delete-btn")
                .html(
                    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                )
                .on("click", function () {
                    // Remove from totalImages
                    totalImages.splice(index, 1);

                    // If it was a new file, also remove from selectedFiles
                    if (item.file) {
                        const fileIndex = selectedFiles.indexOf(item.file);
                        if (fileIndex > -1) selectedFiles.splice(fileIndex, 1);
                    }

                    // Update the input files and re-render
                    updateInputFiles();
                    renderImages();

                    const retained_images = totalImages.filter(
                        (item) => item.image_path
                    );

                    $('[name="retained_images"]').val(
                        JSON.stringify(retained_images)
                    );
                });

            imagePreviewDiv.append(imgElement).append(deleteButton);

            // Filename below the image
            const fileNameDiv = $("<div>")
                .addClass("text-sm text-gray-700 mt-2")
                .text(item.file ? item.file.name : item.image_name);

            previewDiv.append(imagePreviewDiv).append(fileNameDiv);
            $("#previewContainerImages").append(previewDiv);
        });
    }

    // Preload existing images
    renderImages();

    $("#imageInput").on("change", function (event) {
        const files = event.target.files;

        // Check if the total image count exceeds the limit
        if (totalImages.length + files.length > 5) {
            $("#uploadLimitMessage").removeClass("hidden"); // Show the limit message
            return; // Stop processing new files
        } else {
            $("#uploadLimitMessage").addClass("hidden"); // Hide the limit message
        }

        // Add new files to selectedFiles and totalImages
        $.each(files, function (index, file) {
            selectedFiles.push(file);
            totalImages.push({ file: file });
        });

        // Update input files and re-render the images
        updateInputFiles();
        renderImages();

        const retained_images = totalImages.filter((item) => item.image_path);

        $('[name="retained_images"]').val(JSON.stringify(retained_images));
    });

    setTimeout(function () {
        $(".message").fadeOut();
    }, 2000); // The message will fade out after 5 seconds (5000 ms)
});
