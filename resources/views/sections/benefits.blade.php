<section class="flex flex-col-reverse md:grid md:grid-cols-2 my-32">
  {{-- Information Column --}}
  <div class="w-full h-full pl-12 lg:pl-28">
    <div class="lg:w-3/5 flex flex-col">
      <p class="text-sm text-gray-400 uppercase tracking-wider mb-4 animated-element opacity-0 transition duration-300 ease-in-out uppercase">{{ __('landing.benefits_section_text') }}</p>
      <h1 class="text-4xl lg:text-5xl font-light text-gray-900 animated-element opacity-0 transition duration-300 ease-in-out">
        {{ __('landing.benefits_header_text_1') }} <span class="italic font-semibold font-century">{{ __('landing.benefits_header_text_2') }}</span>
      </h1>
    </div>

    <div class="w-full relative mt-16">
      <div class="space-y-12 flex flex-col lg:items-end">
          <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
              <div class="text-7xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
                  <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">01</span>
              </div>
              <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
                  <p>
                    {{ __('landing.benefits_content_1') }}
                  </p>
              </div>
          </div>

          <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
            <div class="text-7xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
                <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">02</span>
            </div>
            <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
                <p>
                  {{ __('landing.benefits_content_2') }}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
          <div class="text-7xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
              <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">03</span>
          </div>
          <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
              <p>
                {{ __('landing.benefits_content_3') }}
              </p>
          </div>
      </div>

      <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
        <div class="text-7xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
            <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">04</span>
        </div>
        <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
            <p>
              {{ __('landing.benefits_content_4') }}
            </p>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
      <div class="text-7xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
          <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">05</span>
      </div>
      <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
          <p>
            {{ __('landing.benefits_content_5') }}
          </p>
      </div>
    </div>
    </div>
    </div>
  
  </div>

  {{-- Image Column --}}
  <div class="relative w-full mb-52 md:mb-20">
    <img src="{{ asset('images/benefit-cover.webp') }}" class="ml-auto object-center w-[60%] md:w-[80%]" alt="">

    <img src="{{ asset('images/phone-2.webp') }}" class="absolute inset-0 w-[60%] top-28 animated-element opacity-0 transition duration-300 ease-in-out pl-6" alt="">
  </div>
</section>
