<section class="container mx-auto flex gap-16 max-md:flex-col p-8">
    <div class="flex flex-col w-[29%] max-md:ml-0 max-md:w-full">
        <div class="flex flex-col text-zinc-800 max-md:mt-10">
            <h2 class="self-start text-base font-light text-zinc-400 uppercase animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.our_capability_section_text') }}</h2>
            <h3 class="mt-6 text-6xl font-normal leading-[64px] max-md:mr-1 max-md:text-4xl max-md:leading-10">
                {{ __('landing.ensuring_your_property_text_1') }}<br><span class="italic font-century animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.ensuring_your_property_text_2') }}</span>
            </h3>
            <p class="mt-36 text-xl leading-9 max-md:mt-10 animated-element opacity-0 transition duration-300 ease-in-out">
                {{ __('landing.our_capability_content') }}
            </p>
        </div>
    </div>
    <div class="flex flex-col ml-5 w-full max-md:ml-0 max-md:w-full animated-element opacity-0 transition duration-300 ease-in-out">
        <img loading="lazy" src="{{ asset('images/kawasan.webp') }}" class="object-contain grow w-full aspect-[1.06] max-md:mt-10 max-md:max-w-full" alt="Property maintenance illustration">
    </div>
</section>