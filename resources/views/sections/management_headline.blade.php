<section class="flex flex-col relative bg-[url('images/management-hero.webp')] bg-cover bg-right min-h-screen">
  @include('partials.navbar_white')    

  {{-- Headline --}}
  <section class="flex text-white absolute bottom-0 flex-col items-start px-16 py-14 max-w-full bg-white bg-opacity-10 mt-[549px] w-[450px] md:w-[648px] max-md:px-5 max-md:mt-10 bottom-20 backdrop-blur-md animated-element opacity-0 transition duration-300 ease-in-out">
      <h1 class="text-6xl font-medium leading-[60px] max-md:max-w-full max-md:text-4xl max-md:leading-10 max-md:w-[90%]">
          <span class="font-[405]">{{ __('landing.managements_header_text_1') }}</span>
          <br />
          <span class="font-century italic">{{ __('landing.managements_header_text_2') }}</span> <span class="font-[405]">{{ __('landing.managements_header_text_3') }}</span>
          <br />
          <span class="font-century italic">{{ __('landing.managements_header_text_4') }}</span>
      </h1>
      <p class="mt-10 text-base font-light leading-5 w-[381px] max-md:w-full">
          {{ __('landing.management_subtitle') }}
      </p>
  </section>
</section>
