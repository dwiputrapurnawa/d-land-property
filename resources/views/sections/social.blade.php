<section class="bg-black text-white px-4 md:px-8 lg:px-16">
  <div class="w-full flex flex-col lg:flex-row gap-8 h-full relative">
      {{-- Section A --}}
      <div class="flex flex-col lg:w-1/3 z-50 lg:-ml-16 h-full absolute">
    <div class="bg-white bg-opacity-10 p-8 lg:p-12 rounded-lg backdrop-filter backdrop-blur-lg h-full flex flex-col">
        <h2 class="text-sm font-semibold tracking-wider mb-4 animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.social_subtitle') }}</h2>
        <h3 class="text-4xl lg:text-5xl font-light mb-8 animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.social_title') }}</h3>
        <p class="text-xl lg:text-2xl text-zinc-400 mb-12 lg:mb-24 animated-element opacity-0 transition duration-300 ease-in-out">
            {{ __('landing.social_text') }}
        </p>
        <!-- Spacer div with flex-grow to push the link down -->
        <div class="flex-grow"></div>
        <a
            href="{{ $company->instagram }}"
            class="inline-block px-8 py-3 border border-white rounded-full text-sm font-semibold tracking-wider transition-colors hover:bg-white hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900 w-full text-center"
            tabindex="0"
        >
            {{ __('landing.social_visit_instagram') }}
        </a>
    </div>
</div>

      <div class="flex-col w-[80%] lg:ml-auto py-16 mb-10 pl-10">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-4">
          @for ($i = 1; $i <= 6; $i++)
            <div class="relative aspect-square animated-element opacity-0 transition duration-900 ease-in-out">
              <img
                  src="/images/instagram-post-{{ $i }}.png"
                  alt="Instagram post {{ $i }}"
                  class="absolute inset-0 w-full h-full object-cover rounded-lg"
                  loading="lazy"
              />
              <img 
                  src="/images/stack.png" 
                  class="absolute top-3 right-3 w-5 h-5" 
                  alt="Stack icon"
                  srcset=""
              />
            </div>
          @endfor
        </div>
      </div>
      
      </div>
  </div>
</section>
