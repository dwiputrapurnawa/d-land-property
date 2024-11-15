$(function () {
    function setLanguage() {
        const flagPath = {
            en: {
                img: "/images/en-icon.png",
                text: "English",
            },
            id: {
                img: "/images/id-icon.png",
                text: "Bahasa",
            },
        };

        $("#customSelect span").text(flagPath[locale].text);
        $("#customSelect span").prepend(
            `<img src="${flagPath[locale].img}" alt="${locale}" class="w-6 h-6 mr-2">`
        );
    }

    setLanguage();

    $(document).on("click", function (event) {
        // Check if the clicked element is not the menu or the button
        if (
            !$(event.target).closest("#menuButton").length &&
            !$(event.target).closest("#mobileMenu").length
        ) {
            // Hide the menu
            $("#mobileMenu").addClass("hidden");
        }
    });

    $("#menuButton").on("click", function (event) {
        event.stopPropagation();
        $("#mobileMenu").toggleClass("hidden");
    });

    // Toggle dropdown visibility
    $("#customSelect").click(function () {
        $("#dropdown").toggleClass("active");
        $("#arrow-up").toggleClass("hidden");
        $("#arrow-down").toggleClass("hidden");
    });

    // Toggle dropdown visibility for mobile
    $("#customSelectMobile").click(function () {
        $("#dropdownMobile").toggleClass("active");
        $("#arrow-up-mobile").toggleClass("hidden");
        $("#arrow-down-mobile").toggleClass("hidden");
    });

    // Handle language selection
    $("#dropdown div").click(function () {
        const flagPath = {
            en: "/images/en-icon.png",
            id: "/images/id-icon.png",
        };
        const selectedLanguage = $(this).data("value");
        const selectedText = $(this).text();

        $("#customSelect span").text(selectedText);
        $("#customSelect span").prepend(
            `<img src="${flagPath[selectedLanguage]}" alt="${selectedLanguage}" class="w-6 h-6 mr-2">`
        );

        $("#customSelectMobile span").text(selectedText);
        $("#customSelectMobile span").prepend(
            `<img src="${flagPath[selectedLanguage]}" alt="${selectedLanguage}" class="w-6 h-6 mr-2">`
        );

        $("#dropdown").removeClass("active");
        $("#arrow-up").toggleClass("hidden");
        $("#arrow-down").toggleClass("hidden"); // Hide dropdown after selection

        $("#dropdownMobile").removeClass("active");
        $("#arrow-up-mobile").toggleClass("hidden");
        $("#arrow-down-mobile").toggleClass("hidden"); // Hide dropdown after selection

        window.location.href =
            window.location.pathname + "?lang=" + selectedLanguage;
    });

    // Handle language selection for mobile
    $("#dropdownMobile div").click(function () {
        const flagPath = {
            en: "/images/en-icon.png",
            id: "/images/id-icon.png",
        };
        const selectedLanguage = $(this).data("value");
        const selectedText = $(this).text();

        $("#customSelectMobile span").text(selectedText);
        $("#customSelectMobile span").prepend(
            `<img src="${flagPath[selectedLanguage]}" alt="${selectedLanguage}" class="w-6 h-6 mr-2">`
        );

        $("#customSelect span").text(selectedText);
        $("#customSelect span").prepend(
            `<img src="${flagPath[selectedLanguage]}" alt="${selectedLanguage}" class="w-6 h-6 mr-2">`
        );

        $("#dropdownMobile").removeClass("active");
        $("#arrow-up-mobile").toggleClass("hidden");
        $("#arrow-down-mobile").toggleClass("hidden"); // Hide dropdown after selection

        $("#dropdown").removeClass("active");
        $("#arrow-up").toggleClass("hidden");
        $("#arrow-down").toggleClass("hidden"); // Hide dropdown after selection
    });

    // Close the dropdown if clicking outside of it
    $(document).click(function (event) {
        if (!$(event.target).closest("#customSelect").length) {
            if ($("#dropdown").hasClass("active")) {
                $("#arrow-up").toggleClass("hidden");
                $("#arrow-down").toggleClass("hidden");
            }

            $("#dropdown").removeClass("active");
        }
    });

    // Close the dropdown if clicking outside of it for mobile
    $(document).click(function (event) {
        if (!$(event.target).closest("#customSelectMobile").length) {
            if ($("#dropdownMobile").hasClass("active")) {
                $("#arrow-up-mobile").toggleClass("hidden");
                $("#arrow-down-mobile").toggleClass("hidden");
            }

            $("#dropdownMobile").removeClass("active");
        }
    });

    // Function to check if the element is in viewport
    function isElementInViewport(el) {
        const elementTop = $(el).offset().top;
        const elementBottom = elementTop + $(el).outerHeight();
        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    // Function to toggle classes based on visibility
    function handleElementVisibility() {
        $(".animated-element").each(function () {
            if (!isElementInViewport(this)) {
                // Action when element is out of the viewport
                $(this).removeClass("animate-fade-in-up").addClass("opacity-0");
            } else {
                // Action when element is in the viewport
                $(this).addClass("animate-fade-in-up").removeClass("opacity-0");
            }
        });
    }

    // Initial check
    handleElementVisibility();

    // Bind scroll and resize events to check element visibility
    $(window).on("scroll resize", handleElementVisibility);

    // Open the modal
    $("#openModalBtn").click(function () {
        $("#whatsappModal").removeClass("hidden");
    });

    // Close the modal when clicking the close button
    $("#closeModalBtn").click(function () {
        $("#whatsappModal").addClass("hidden");
    });

    // Close the modal when clicking outside of it
    $(window).click(function (event) {
        if ($(event.target).is("#whatsappModal")) {
            $("#whatsappModal").addClass("hidden");
        }
    });
    // Open the modal
    $(".openRequestCallModalBtn").click(function () {
        $("#requestCallModal").removeClass("hidden");
    });

    // Close the modal when clicking the close button
    $("#requestModalCloseBtn").click(function () {
        $("#requestCallModal").addClass("hidden");
    });

    // Close the modal when clicking outside of it
    $(window).click(function (event) {
        if ($(event.target).is("#requestCallModal")) {
            $("#requestCallModal").addClass("hidden");
        }
    });

    function adjustWidth() {
        $("[name='country_code']").each(function () {
            var $countryCodeInput = $(this);

            // Adjust the width of the input element based on the text value

            // Create a temporary span to measure the text width
            var $tempSpan = $("<span>")
                .text($countryCodeInput.val())
                .css({
                    visibility: "hidden",
                    position: "absolute",
                    "white-space": "nowrap",
                    font: $countryCodeInput.css("font"),
                });

            // Append the span to the body, measure the width, and then remove it
            $("body").append($tempSpan);
            var width = $tempSpan.width();
            $tempSpan.remove();

            // Set the width of the input element
            $countryCodeInput.width(width);
        });
    }

    // Call the function initially to set the width
    adjustWidth();

    $(".country-code-select").on("click", function () {
        $(this).find(".dropdown").toggleClass("active");
        $(this).find(".arrow-up").toggleClass("hidden");
        $(this).find(".arrow-down").toggleClass("hidden");
    });

    $(".dropdown div").on("click", function () {
        const img_path = $(this).data("img");
        const selectedDial = $(this).data("dial");

        $(this).parents(".country-code-select").find("span").text("");
        $(this)
            .parents(".dropdown-parent")
            .find(".country-code-select span")
            .prepend(
                `<img src="${img_path}" alt="${selectedDial}" class="w-6 h-6 mr-2">`
            );

        $(this)
            .parents(".dropdown-parent")
            .find('[name="country_code"]')
            .attr("readonly", false);

        $(this)
            .parents(".dropdown-parent")
            .find('[name="country_code"]')
            .val(selectedDial);

        $(this)
            .parents(".dropdown-parent")
            .find('[name="country_code"]')
            .attr("readonly", true);

        $(this).closest(".arrow-up").toggleClass("hidden");
        $(this).closest(".arrow-down").toggleClass("hidden");
    });

    $(".country-code-select, [name='country_code'], [name='phone']").on({
        mouseenter: function () {
            $(this)
                .parents(".dropdown-parent")
                .find(".hr-input")
                .removeClass("border-zinc-400");
            $(this)
                .parents(".dropdown-parent")
                .find(".hr-input")
                .addClass("border-white");
        },
        mouseleave: function () {
            $(this)
                .parents(".dropdown-parent")
                .find(".hr-input")
                .addClass("border-zinc-400");
            $(this)
                .parents(".dropdown-parent")
                .find(".hr-input")
                .removeClass("border-white");
        },
        focus: function () {
            $(this)
                .parents(".dropdown-parent")
                .find(".hr-input")
                .removeClass("border-zinc-400");
            $(this)
                .parents(".dropdown-parent")
                .find(".hr-input")
                .addClass("border-white");
        },
    });

    $(".getConsultationButton").click(function (event) {
        event.preventDefault();

        const form = $(this).parents(".contact-us-form");

        const name = form.find("[name='name']").val();
        const email = form.find("[name='email']").val();
        const messenger = form.find("[name='messenger']").val();
        const countryCode = form.find("[name='country_code']").val();
        const phoneNumber = form.find("[name='phone']").val();
        const fullNumber = countryCode + phoneNumber;

        const companyNumber = $("[name='company_number']").val();

        const url = $("[name='contact-us-url']").val();

        if (name === "" || email === "" || phoneNumber === "") {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please fill in all fields.",
            });

            return;
        }

        if (messenger === "whatsapp") {
            const message = encodeURIComponent(
                `Hello, I am ${name}, interested in a consultation.`
            );
            const whatsappURL = `https://wa.me/${companyNumber}?text=${message}`;

            // Redirect to WhatsApp with the pre-filled message
            window.open(whatsappURL, "_blank");
        }

        $(this).attr("disabled", true);

        // Optional: send data to backend via AJAX
        $.ajax({
            url: url,
            type: "POST",
            data: {
                name: name,
                email: email,
                phone: fullNumber,
                messenger: messenger,
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                console.log("Consultation request received");
                form.find("[name='name']").val("");
                form.find("[name='email']").val("");
                form.find("[name='phone']").val("");
            },
            error: function (error) {
                console.log(error.responseText);
                form.find("[name='name']").val("");
                form.find("[name='email']").val("");
                form.find("[name='phone']").val("");
            },
        });

        $(this).attr("disabled", false);
    });

    $(".get-presentation-btn").click(function (event) {
        const countryCode = $(
            "#project-presentation [name='country_code']"
        ).val();
        const phoneNumber = $("#project-presentation [name='phone']").val();
        const fullNumber = countryCode + phoneNumber;

        const companyNumber = $("[name='company_number']").val();

        console.log("fullNumber:", fullNumber);

        const url = $("[name='project-presentation-url']").val();

        try {
            const message = encodeURIComponent(
                `I'd like to receive the project presentation.`
            );
            const whatsappURL = `https://wa.me/${companyNumber}?text=${message}`;

            // Redirect to WhatsApp with the pre-filled message
            window.open(whatsappURL, "_blank");

            // Optional: send data to backend via AJAX
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    phone: fullNumber,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    console.log("Project Presentation request received");
                },
                error: function (error) {
                    console.log(error.responseText);
                },
            });
        } catch (error) {
            console.error(error);
        }
    });
});
