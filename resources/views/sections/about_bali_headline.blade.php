<section class="w-full h-full mx-auto py-12 md:py-24">
    <div class="flex flex-col md:flex-row gap-8">
      <div class="w-full md:w-1/2 p-16">
        <h2 class="text-base font-light text-zinc-400 mb-4 animated-element opacity-0 transition duration-300 ease-in-out uppercase">{{ __('landing.about_bali_section_text') }}</h2>
        <p class="text-4xl md:text-3xl lg:text-5xl font-normal leading-tight md:leading-snug lg:leading-[1.2] text-zinc-800 animated-element opacity-0 transition duration-300 ease-in-out">
          <em class="font-medium font-century italic">{{ __('landing.about_bali_header_text_1') }}</em> {{ __('landing.about_bali_header_text_2') }} <em class="font-medium font-century italic">{{ __('landing.about_bali_header_text_3') }}</em> {{ __('landing.about_bali_header_text_4') }} <em class="font-medium font-century italic">{{ __('landing.about_bali_header_text_5') }}</em> {{ __('landing.about_bali_header_text_6') }}
        </p>
        <p class="mt-8 md:mt-16 text-base leading-relaxed text-zinc-800 max-w-xl animated-element opacity-0 transition duration-300 ease-in-out">
            {{ __('landing.about_bali_subheader') }}
          </p>
      </div>
      <div class="w-full md:w-1/2 w-screen hidden md:block">
        <img 
          src="{{ asset('images/indonesia.png') }}" 
          alt="Illustration representing Indonesia's economic growth" 
          class="w-full h-full object-fill inset-0 right-0"
          loading="lazy"
          width="800"
          height="600"
        />
      </div>
      
    </div>
   
  </section>