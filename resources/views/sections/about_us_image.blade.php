<section class="flex flex-col p-20">
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