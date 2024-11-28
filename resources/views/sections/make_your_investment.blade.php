<section class="container mx-auto px-4 py-16">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-32">
    
    {{-- First Grid Item --}}
    <div class="w-full px-4 mb-8 col-span-1">
      <header class="animated-element opacity-0 transition duration-300 ease-in-out">
        <h2 class="text-base font-light text-zinc-400 uppercase mb-4">{{ __('landing.services_section_text') }}</h2>
        <h1 class="text-4xl md:text-6xl font-normal leading-tight text-zinc-800">
          {{ __('landing.make_your_investment_text_1') }}<br> <span class="italic font-century tracking-tighter"> {{ __('landing.make_your_investment_text_2') }}</span>
        </h1>
      </header>
    </div>

    {{-- Second Grid Item --}}
    <div class="grid grid-cols-2 gap-4 col-span-2 p-2">
      <article class="mb-8 animated-element opacity-0 transition duration-300 ease-in-out">
        <h3 class="text-lg md:text-2xl font-normal tracking-wide text-zinc-800 mb-6">{{ __('landing.services_section_text') }} 01</h3>
        <p class="text-sm md:text-xl tracking-wide leading-relaxed text-zinc-700">
          {{ __('landing.services_content_1') }}
        </p>
      </article>
      <article class="mb-8 animated-element opacity-0 transition duration-300 ease-in-out">
        <h3 class="text-lg md:text-2xl font-normal tracking-wide text-zinc-800 mb-6">{{ __('landing.services_section_text') }} 02</h3>
        <p class="text-sm md:text-xl tracking-wide leading-relaxed text-zinc-700">
          {{ __('landing.services_content_2') }}
        </p>
      </article>
      <article class="mb-8 animated-element opacity-0 transition duration-300 ease-in-out">
        <h3 class="text-lg md:text-2xl font-normal tracking-wide text-zinc-800 mb-6">{{ __('landing.services_section_text') }} 03</h3>
        <p class="text-sm md:text-xl tracking-wide leading-relaxed text-zinc-700">
          {{ __('landing.services_content_3') }}
        </p>
      </article>
      <article class="mb-8 animated-element opacity-0 transition duration-300 ease-in-out">
        <h3 class="text-lg md:text-2xl font-normal tracking-wide text-zinc-800 mb-6">{{ __('landing.services_section_text') }} 04</h3>
        <p class="text-sm md:text-xl tracking-wide leading-relaxed text-zinc-700">
          {{ __('landing.services_content_4') }}
        </p>
      </article>
    </div>
  </div>
</section>
