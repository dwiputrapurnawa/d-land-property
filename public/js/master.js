$(function () {
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
                console.log("Element is out of viewport");
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
});
