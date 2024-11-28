<section class="flex flex-col lg:flex-row items-start lg:items-start justify-center px-6 py-16 lg:py-24 lg:px-40 space-y-10 lg:space-y-0 lg:space-x-20 w-full md:mb-52 md:mt-40">
    <!-- Left Section: Title and Heading -->
    <div class="lg:w-1/3">
        <!-- Subtitle: About Us -->
        <p class="text-sm text-base text-gray-400 uppercase tracking-wider mb-4 animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.about_us_section_text') }}</p>
        <!-- Main Heading: Seamless Experience -->
        <h1 class="text-4xl lg:text-5xl font-light text-gray-900 animated-element opacity-0 transition duration-300 ease-in-out">
            {{ __('landing.seamless_text') }} <br><span class="italic font-semibold font-century">{{ __('landing.experience_text') }}</span>
        </h1>
    </div>

    <!-- Right Section: Description Text -->
    <div class="lg:w-2/3 text-xl text-base sm:text-3xl font-light leading-relaxed space-y-8 py-10 md:px-40 animated-element opacity-0 transition duration-300 ease-in-out">
        <p>
            {{ __('landing.about_us_description_text_1') }}
        </p>
        <p>
            {{ __('landing.about_us_description_text_2') }}
        </p>
    </div>
</section>