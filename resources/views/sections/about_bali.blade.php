<section id="section_about_bali" class="flex flex-col pb-16 text-white">
    <div class="flex relative flex-col items-start px-5 sm:px-10 md:px-20 pt-24 sm:pt-36 md:pt-56 w-full min-h-[500px] md:min-h-[761px] max-w-full">
        <!-- Background Image -->
        <img loading="lazy" src="/images/bali.png" alt="Scenic view of Bali" class="object-fill absolute inset-0 w-full h-full md:h-[95%]">
        
        <!-- Heading -->
        <h1 class="relative text-4xl sm:text-6xl md:text-8xl font-medium tracking-tighter leading-none text-center animated-element opacity-0 transition duration-300 ease-in-out">
            Bali
        </h1>
        
        <!-- Subheading / Description -->
        <p class="relative mt-6 sm:mt-8 md:mt-12 text-lg sm:text-2xl md:text-4xl leading-8 sm:leading-9 md:leading-10 w-full md:w-[618px] max-w-full text-center animated-element opacity-0 transition duration-300 ease-in-out">
            <span>{{ __('landing.about_bali_subtitle_1') }}</span>
            <span>{{ __('landing.about_bali_subtitle_2') }}</span>
            <span class="italic font-medium">{{ __('landing.about_bali_subtitle_3') }}</span>
            <span>{{ __('landing.about_bali_subtitle_4') }}</span>
            <span class="italic font-medium">{{ __('landing.about_bali_subtitle_5') }}</span>
        </p>

        <!-- Footer Section -->
        <div class="flex relative z-10 flex-col sm:flex-row items-center sm:items-start gap-5 mt-10 sm:mt-16 md:mt-36 mb-0 w-full text-center sm:text-left">
            <!-- Info Text -->
            <p class="text-sm sm:text-base font-light self-start animated-element opacity-0 transition duration-300 ease-in-out">
                {{ __('landing.about_bali_info_text') }}
            </p>
            
            <!-- Call-to-Action Box -->
            <div class="box flex flex-col px-5 sm:px-9 pt-8 sm:pt-12 md:pt-16 pb-16 sm:pb-20 md:pb-32 text-sm sm:text-base text-center backdrop-blur-lg bg-opacity-50 font-[405] animated-element opacity-0 transition duration-300 ease-in-out ml-auto">
                <a href="#" class="flex items-center gap-2.5">
                    <span class="underline-animation"> {{ __('landing.readmore_text') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="object-contain shrink-0 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>