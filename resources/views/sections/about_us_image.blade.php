<div class="w-full h-full">
    <section class="flex flex-col p-20 max-md:hidden">
        <div class="w-full max-md:max-w-full">
            <div class="flex gap-8 max-md:flex-col">
                <article class="flex flex-col w-[35%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-1.webp') }}"
                        alt="Gallery image 1"
                        class="object-contain grow w-full aspect-[1.04] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out lazy"
                    />
                </article>
                <article class="flex flex-col ml-8 w-[65%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-2.webp') }}"
                        alt="Gallery image 2"
                        class="object-contain grow w-full aspect-[1.92] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out lazy"
                    />
                </article>
            </div>
        </div>
        <div class="mt-8 w-full max-md:max-w-full">
            <div class="flex gap-8 max-md:flex-col">
                <article class="flex flex-col w-[65%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-3.webp') }}"
                        alt="Gallery image 3"
                        class="object-contain grow w-full aspect-[1.92] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out lazy"
                    />
                </article>
                <article class="flex flex-col ml-8 w-[35%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-4.webp') }}"
                        alt="Gallery image 4"
                        class="object-contain grow w-full aspect-[1.05] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out lazy"
                    />
                </article>
            </div>
        </div>
        <img
            loading="lazy"
            src="{{ asset('images/img-5.webp') }}"
            alt="Gallery image 5"
            class="object-contain mt-8 w-full aspect-[1.79] max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out lazy"
        />
    </section>
    
    
    
    <section class="flex flex-col mx-auto w-full max-w-[480px] px-6 md:hidden">
        <div class="flex gap-3 w-full">
            <img loading="lazy" src="{{ asset('images/img-mobile-1.webp') }}" alt="Gallery image 1" class="object-contain shrink-0 max-w-full aspect-[1.04] w-[182px] lazy" />
            <img loading="lazy" src="{{ asset('images/img-mobile-2.webp') }}" alt="Gallery image 2" class="object-contain shrink-0 max-w-full aspect-[1.04] w-[182px] ml-auto lazy" />
        </div>
        <img loading="lazy" src="{{ asset('images/img-mobile-3.webp') }}" alt="Gallery image 3" class="object-contain mt-3 w-full aspect-[1.95] lazy" />
        <img loading="lazy" src="{{ asset('images/img-mobile-4.webp') }}" alt="Gallery image 4" class="object-contain mt-3 w-full aspect-[1.9] lazy" />
        <img loading="lazy" src="{{ asset('images/img-mobile-5.webp') }}" alt="Gallery image 5" class="object-contain mt-3 w-full aspect-[1.78] lazy" />
    </section>
</div>
