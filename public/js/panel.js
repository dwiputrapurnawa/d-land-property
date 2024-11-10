$(function () {
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

    const url_activity = $("#table-activity").data("url");
    const url_project = $("#table-project").data("url");

    $("#table-activity").DataTable({
        processing: true,
        serverSide: true,
        columns: [
            { data: "no" },
            { data: "name" },
            { data: "activity" },
            { data: "created_at" },
        ],
        ajax: {
            url: url_activity,
            type: "GET",
        },
        pageLength: 10,
    });

    $("#table-project").DataTable({
        processing: true,
        serverSide: true,
        columns: [
            { data: "no" },
            { data: "title" },
            { data: "subtitle" },
            { data: "roi" },
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
                targets: 5, // Apply customization on the 4th column (index 3)
                render: function (data, type, row) {
                    // Format the date (assuming data is in ISO format)
                    if (type === "display") {
                        return new Date(data).toLocaleDateString(); // Format as mm/dd/yyyy
                    }
                    return data; // For other types (sorting, etc.), return original
                },
            },
            {
                targets: 4,
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
                text: "You will publish this project?",
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
});
