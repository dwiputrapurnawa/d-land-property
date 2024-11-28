<div class="w-full h-full">
    <section class="flex flex-col p-20 max-md:hidden">
        <div class="w-full max-md:max-w-full">
            <div class="flex gap-8 max-md:flex-col">
                <article class="flex flex-col w-[35%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-1.png') }}"
                        alt="Gallery image 1"
                        class="object-contain grow w-full aspect-[1.04] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                    />
                </article>
                <article class="flex flex-col ml-8 w-[65%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-2.png') }}"
                        alt="Gallery image 2"
                        class="object-contain grow w-full aspect-[1.92] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                    />
                </article>
            </div>
        </div>
        <div class="mt-8 w-full max-md:max-w-full">
            <div class="flex gap-8 max-md:flex-col">
                <article class="flex flex-col w-[65%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-3.png') }}"
                        alt="Gallery image 3"
                        class="object-contain grow w-full aspect-[1.92] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                    />
                </article>
                <article class="flex flex-col ml-8 w-[35%] max-md:ml-0 max-md:w-full">
                    <img
                        loading="lazy"
                        src="{{ asset('images/img-4.png') }}"
                        alt="Gallery image 4"
                        class="object-contain grow w-full aspect-[1.05] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                    />
                </article>
            </div>
        </div>
        <img
            loading="lazy"
            src="{{ asset('images/img-5.png') }}"
            alt="Gallery image 5"
            class="object-contain mt-8 w-full aspect-[1.79] max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
        />
    </section>
    
    
    
    <section class="flex flex-col mx-auto w-full max-w-[480px] px-12 md:hidden">
        <div class="flex gap-3 w-full">
            <img loading="lazy" src="{{ asset('images/img-mobile-1.png') }}" alt="Gallery image 1" class="object-contain shrink-0 max-w-full aspect-[1.04] w-[182px]" />
            <img loading="lazy" src="{{ asset('images/img-mobile-2.png') }}" alt="Gallery image 2" class="object-contain shrink-0 max-w-full aspect-[1.04] w-[182px] ml-auto" />
        </div>
        <img loading="lazy" src="{{ asset('images/img-mobile-3.png') }}" alt="Gallery image 3" class="object-contain mt-3 w-full aspect-[1.95]" />
        <img loading="lazy" src="{{ asset('images/img-mobile-4.png') }}" alt="Gallery image 4" class="object-contain mt-3 w-full aspect-[1.9]" />
        <img loading="lazy" src="{{ asset('images/img-mobile-5.png') }}" alt="Gallery image 5" class="object-contain mt-3 w-full aspect-[1.78]" />
    </section>
</div>
