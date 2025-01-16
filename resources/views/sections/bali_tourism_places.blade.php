<section class="w-full justify-items-center mb-[18%]">

    <h1 class="text-4xl text-center md:text-6xl mb-16 animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.bali_tourism_places_text_1') }} <span class="font-century italic">{{ __('landing.bali_tourism_places_text_2') }}</span></h1>

    <div class="grid grid-cols-1 md:grid-cols-4 justify-items-center gap-5 mx-16">

      <div class="flex flex-col">
        <div class="relative w-full h-[500px] mb-5 overflow-hidden">
          <img src="{{ asset('images/canggu.webp') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
        </div>
        <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Canggu</h1>
        <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.canggu_content') }}</p>
      </div>
      
      <div class="flex flex-col">
        <div class="relative w-full h-[500px] mb-5 overflow-hidden">
          <img src="{{ asset('images/ubud.webp') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
        </div>
        <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Ubud</h1>
        <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.ubud_content') }}</p>
      </div>

      <div class="flex flex-col">
        <div class="relative w-full h-[500px] mb-5 overflow-hidden">
          <img src="{{ asset('images/nusa-dua.webp') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
        </div>
        <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Nusa Dua</h1>
        <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.nusa_dua_content') }}</p>
      </div>
      <div class="flex flex-col">
        <div class="relative w-full h-[500px] mb-5 overflow-hidden">
          <img src="{{ asset('images/uluwatu.webp') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
        </div>
        <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Uluwatu</h1>
        <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.uluwatu_content') }}</p>
      </div>

    </div>

  </section>
