$(function () {
    $('[name="phone"]').inputmask({
        mask: "(999)-999-99-999",
        placeholder: " ",
        showMaskOnHover: false,
        showMaskOnFocus: false,
        clearMaskOnLostFocus: true,
        onBeforePaste: function (pastedValue, opts) {
            // Remove any non-numeric characters when pasting
            return pastedValue.replace(/\D/g, "");
        },
    });

    $('[name="phone"]').on("input", function () {
        // Replace any non-numeric characters with an empty string
        var value = $(this).val().replace(/[^\d]/g, "");
        // Set the formatted value back
        $(this).val(value);
    });

    function setLanguage() {
        const flagPath = {
            en: {
                img: "/images/en-icon.webp",
                text: "English",
            },
            id: {
                img: "/images/id-icon.webp",
                text: "Bahasa",
            },
        };

        console.log(locale);

        $("#customSelect span").text(flagPath[locale].text);
        $("#customSelect span").prepend(
            `<img src="${flagPath[locale].img}" alt="${locale}" class="w-6 h-6 mr-2">`
        );
        $("#customSelectMobile span").text(flagPath[locale].text);
        $("#customSelectMobile span").prepend(
            `<img src="${flagPath[locale].img}" alt="${locale}" class="w-6 h-6 mr-2">`
        );
    }

    function changePhoneCode() {
        $(".phone-code").on("click", function (event) {
            const img_path = $(this).data("img");
            const selectedDial = $(this).data("dial");

            $(this).parents(".country-code-select").find("span").text("");
            $(this)
                .parents(".dropdown-parent")
                .find(".country-code-select span")
                .prepend(
                    `<img src="${img_path}" alt="${selectedDial}" class="w-9 h-9 mr-2">`
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

            adjustWidth();
        });
    }

    changePhoneCode();
    setLanguage();

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
            en: "/images/en-icon.webp",
            id: "/images/id-icon.webp",
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
            en: "/images/en-icon.webp",
            id: "/images/id-icon.webp",
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

        window.location.href =
            window.location.pathname + "?lang=" + selectedLanguage;
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

    $(".country-code-select").on("click", function (event) {
        event.stopPropagation(); // Prevent the click inside the dropdown from triggering the document click event
        $(this).find(".dropdown").toggleClass("active");
        $(this).find(".arrow-up").toggleClass("hidden");
        $(this).find(".arrow-down").toggleClass("hidden");
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

    $(".input-search").on("click", function (e) {
        e.stopPropagation();
    });

    $(".input-search").on("change keyup", function () {
        const searchInput = $(this).val();

        const url = $("[name='get-phone-code-url']").val();
        var item_container = $(this)
            .parents(".dropdown")
            .find(".item-dropdown");

        $.ajax({
            url: url,
            type: "GET",
            data: {
                search: searchInput,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                item_container.empty();

                response.forEach((country) => {
                    const option = `<div class="p-2 cursor-pointer flex items-center phone-code" data-value="${country.country_code}" data-dial="+${country.phone_code}" data-img="/flags/${country.country_code}.svg">
                        <img src="/flags/${country.country_code}.svg" class="w-6 h-6 mr-2" alt=""> ${country.country_name} (+${country.phone_code})
                      </div>`;

                    item_container.append(option);
                });

                changePhoneCode();
            },
            error: function (error) {
                console.log(error.responseText);
            },
        });
    });

    const $input = $(".input-search");
    const $dropdown = $(".item-dropdown");

    // Blur input when clicking outside of dropdown
    $input.on("blur", function () {
        setTimeout(() => {
            if (!$dropdown.is(":hover")) {
                // Only blur if the dropdown is not hovered
                $input.blur();
            }
        }, 0);
    });

    // Prevent input blur when clicking on the dropdown
    $dropdown.on("mousedown", function (e) {
        e.preventDefault(); // Prevent focus change
    });

    function isNotMobileScreen() {
        const screenWidth = $(window).width();
        return screenWidth >= 768; // Returns true if screen is tablet or larger
    }

    $("#burger-menu").on("click", function (event) {
        $(this).toggleClass("active");
        var nav = $(this).parents("nav");
        const nav_id = nav.attr("id");

        if ($(this).hasClass("active")) {
            // Apply transformations
            $(this).find(".bar").eq(0).addClass("translate-y-2 rotate-45 w-6");
            $(this).find(".bar").eq(1).addClass("opacity-0");
            $(this)
                .find(".bar")
                .eq(2)
                .addClass("-translate-y-2 -rotate-45 w-6");

            event.stopPropagation();
            $("#mobileMenu").removeClass("hidden");

            $("body").addClass("overflow-hidden");

            if (nav_id == "nav-text-white") {
                nav.addClass("bg-white");
                nav.removeClass("text-white");
                nav.addClass("text-black");
                $("#logo-company").attr(
                    "src",
                    window.location.origin + "/images/logo-substract.webp"
                );
            }

            nav.removeClass(
                "hover:backdrop-filter hover:backdrop-blur-lg hover:bg-opacity-30"
            );
            nav.addClass("overflow-auto h-full");
            $("#openModalBtn").addClass("hidden");
        } else {
            // Revert transformations
            $(this)
                .find(".bar")
                .eq(0)
                .removeClass("translate-y-2 rotate-45 w-6");
            $(this).find(".bar").eq(1).removeClass("opacity-0");
            $(this)
                .find(".bar")
                .eq(2)
                .removeClass("-translate-y-2 -rotate-45 w-6");

            event.stopPropagation();
            $("#mobileMenu").addClass("hidden");

            $("body").removeClass("overflow-hidden");

            if (nav_id == "nav-text-white") {
                nav.removeClass("bg-white");
                nav.addClass("text-white");
                nav.removeClass("text-black");
                $("#logo-company").attr(
                    "src",
                    window.location.origin + "/images/logo.webp"
                );
            }

            nav.addClass(
                "hover:backdrop-filter hover:backdrop-blur-lg hover:bg-opacity-30"
            );
            nav.removeClass("overflow-auto h-full");
            $("#openModalBtn").removeClass("hidden");
        }
    });

    $(window).on("resize", function (event) {
        // Stop propagation if necessary
        event.stopPropagation(); // Prevents the resize event from propagating further
        console.log("Resize event triggered");
        adjustHeight();

        var nav = $("nav");
        const nav_id = nav.attr("id");

        if (isNotMobileScreen()) {
            console.log("Not a mobile screen (tablet or larger)");

            $(".bar").eq(0).removeClass("translate-y-2 rotate-45 w-6");
            $(".bar").eq(1).removeClass("opacity-0");
            $(".bar").eq(2).removeClass("-translate-y-2 -rotate-45 w-6");

            $("#burger-menu").removeClass("active");

            $("#mobileMenu").removeClass("hidden");

            $("body").removeClass("overflow-hidden");

            if (nav_id == "nav-text-white") {
                nav.removeClass("bg-white");
                nav.addClass("text-white");
                nav.removeClass("text-black");
                $("#logo-company").attr(
                    "src",
                    window.location.origin + "/images/logo.webp"
                );
            }

            nav.addClass(
                "hover:backdrop-filter hover:backdrop-blur-lg hover:bg-opacity-30"
            );
            nav.removeClass("overflow-auto h-full");
            $("#openModalBtn").removeClass("hidden");
        } else {
            console.log("Mobile screen (smaller than 768px)");

            if ($("#burger-menu").hasClass("active")) {
                $("#mobileMenu").removeClass("hidden");
                $("#openModalBtn").addClass("hidden");
            } else {
                $("#mobileMenu").addClass("hidden");
                $("#openModalBtn").removeClass("hidden");
            }
        }
    });

    $("#open-request-call-mobile").on("click", function () {
        $("#requestCallMobile").toggleClass("hidden");
        $("body").css("position", "fixed");
    });

    $("#request-mobile-close").on("click", function () {
        $("#requestCallMobile").toggleClass("hidden");
        $("body").css("position", "static");
    });

    // Function to adjust height
    function adjustHeight() {
        var vh = $(window).height() * 0.01;
        $(":root").css("--vh", vh + "px");
    }

    // Initial call to adjust height
    adjustHeight();
});
