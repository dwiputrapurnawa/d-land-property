
<section id="section_about_us" class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out p-12 sm:p-10 md:p-20 lg:p-40 md:my-40 my-12">
    <div class="flex flex-col md:flex-row gap-6 sm:gap-10 md:gap-20 lg:gap-40">
        <div class="w-full md:w-1/3 lg:w-[29%]">
            <img
                loading="lazy"
                src="/images/logo-substract.png"
                alt="About D'Land Properties"
                class="object-contain w-full max-w-[200px] sm:max-w-[250px] md:max-w-[348px] aspect-[0.83] mx-auto md:mx-0 hidden sm:block"
            >
        </div>
        <article class="w-full md:w-2/3 lg:w-[71%] mt-6 md:mt-0">
            <h2 class="self-start text-md sm:text-sm md:text-base font-medium text-zinc-400 mb-4 sm:mb-6 md:mb-8">ABOUT US</h2>
            <p class="text-2xl max-w-2xl tracking-wide leading-relaxed font-normal text-zinc-800 mb-4 sm:mb-6 md:mb-10">
                <span class="italic font-century tracking tighter"> {{ __('landing.about_us_text_1') }} </span> {{ __('landing.about_us_text_2') }} <span class="italic font-century"> {{ __('landing.about_us_text_3') }} </span> {{ __('landing.about_us_text_4') }} 
            </p>
            
            <p class="text-2xl tracking-wide leading-relaxed font-normal text-zinc-800 max-w-3xl">
                {{ __('landing.about_us_text_5') }} <span class="italic font-century"> {{ __('landing.about_us_text_6') }} </span> {{ __('landing.about_us_text_7') }} 
            </p>
        </article>
    </div>
</section>