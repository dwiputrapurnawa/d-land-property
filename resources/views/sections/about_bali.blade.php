<section id="section_about_bali" class="flex flex-col pb-16 text-white mb-28 relative">
    <div class="flex relative flex-col items-start px-5 sm:px-10 md:px-20 pt-24 sm:pt-36 md:pt-56 w-full min-h-[500px] md:min-h-[761px] bg-[url(images/bali.png)] w-full bg-cover bg-right">
        
        <!-- Heading -->
        <h1 class="font-century relative text-6xl sm:text-6xl md:text-8xl font-medium tracking-tighter leading-none text-center animated-element opacity-0 transition duration-300 ease-in-out">
            Bali
        </h1>
        
        <!-- Subheading / Description -->
        <p class="relative mt-6 sm:mt-8 md:mt-12 text-4xl sm:text-2xl md:text-3xl font-thin leading-8 sm:leading-9 md:leading-10 w-full md:w-[618px] max-w-full text-start animated-element opacity-0 transition duration-300 ease-in-out">
            <span>{{ __('landing.about_bali_subtitle_1') }}</span>
            <span>{{ __('landing.about_bali_subtitle_2') }}</span>
            <span class="italic font-medium font-century">{{ __('landing.about_bali_subtitle_3') }}</span>
            <span>{{ __('landing.about_bali_subtitle_4') }}</span>
            <span class="italic font-medium font-century">{{ __('landing.about_bali_subtitle_5') }}</span>
        </p>

        <!-- DESKTOP FOOTER -->
        <div class="hidden sm:flex relative z-10 flex-col sm:flex-row items-center sm:items-start gap-5 mt-10 sm:mt-16 md:mt-36 mb-0 w-full text-center sm:text-left absolute top-10 w-full">
            <p class="sm:self-auto mt-20 text-sm sm:text-base font-thin self-start animated-element opacity-0 transition duration-300 ease-in-out">
                {{ __('landing.about_bali_info_text') }}
            </p>
            <div class="box flex flex-col px-5 sm:px-9 pt-8 sm:pt-12 md:pt-16 pb-16 sm:pb-20 md:pb-32 text-sm sm:text-base text-center backdrop-blur-lg bg-opacity-50 font-[405] animated-element opacity-0 transition duration-300 ease-in-out ml-auto">
                <a href="{{ route('about.bali.page') }}" class="flex items-center gap-2.5">
                    <span class="underline-animation"> {{ __('landing.readmore_text') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="object-contain shrink-0 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- MOBILE FOOTER --}}
        <section class="block sm:hidden flex flex-col text-center text-white max-w-[376px] relative z-10 mt-auto mx-auto top-10">
            <div class="flex flex-col px-6 pt-6 pb-14 w-full bg-white bg-opacity-10 backdrop-blur-md">
                <p class="text-sm font-light">
                    Properties in Bali offer yields of 10-20% annually, surpassing the global real estate average of 5%
                </p>
                <a href="/about-bali" class="flex items-center gap-2.5 self-center px-6 py-3 mt-6 max-w-full text-base border border-white border-solid font-[405] rounded-[30px] w-[55%] items-center justify-items-end">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </section>

    </div>
</section>
