<section class="grid grid-cols-2 md:grid-cols-4 my-[20%] justify-items-center">
    <div class="flex flex-col max-w-[209px] mb-10 animated-element opacity-0 transition duration-300 ease-in-out w-full h-full">
        <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410] mb-4">
            <img loading="lazy" src="{{ asset('images/laurel.webp') }}" class="object-fill absolute inset-0 size-full w-full h-full" alt="Background image for Global GDP ranking" />
            <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
                7 <sub class="text-3xl">th</sub>
            </h2>
        </div>
        <p class="self-center mt-auto text-sm tracking-wide leading-none text-zinc-800">
            Global GDP
        </p>
    </div>
    

    <div class="flex flex-col max-w-[209px] animated-element opacity-0 transition duration-300 ease-in-out">
      <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410] mb-4">
          <img loading="lazy" src="{{ asset('images/laurel.webp') }}" class="object-fill absolute inset-0 size-full w-full h-full" alt="Background image for Global GDP ranking" />
          <p class="outline-layer-sans text-xl">TOP</p>
          <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
              5
          </h2>
      </div>
      <p class="self-center mt-8 text-sm tracking-wide leading-none text-zinc-800">
        {{ __('landing.global_economies_by_2030') }}
      </p>
  </div>

  <div class="flex flex-col max-w-[209px] animated-element opacity-0 transition duration-300 ease-in-out">
    <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410] mb-4">
        <img loading="lazy" src="{{ asset('images/laurel.webp') }}" class="object-fill absolute inset-0 size-full w-full h-full bottom-0" alt="Background image for Global GDP ranking" />
        <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
            2%
        </h2>
    </div>
    <p class="self-center mt-8 text-sm tracking-wide leading-none text-zinc-800">
      {{ __('landing.annual_inflation_rate') }}
    </p>
</div>

<div class="flex flex-col max-w-[209px] animated-element opacity-0 transition duration-300 ease-in-out">
  <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410] mb-4">
      <img loading="lazy" src="{{ asset('images/laurel.webp') }}" class="object-fill absolute inset-0 size-full w-full h-full" alt="Background image for Global GDP ranking" />
      <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
          5%
      </h2>
  </div>
  <p class="self-center mt-8 text-sm tracking-wide leading-none text-zinc-800">
    {{ __('landing.yearly_economic_growth') }}
  </p>
</div>
</section>