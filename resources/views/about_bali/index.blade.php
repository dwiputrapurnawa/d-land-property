@extends('layouts.main')

@section('title')
    D'Land Property - About Bali
@endsection

@section('content')

<input type="hidden" name="company_number" value="{{ $company->phone }}">

    @include('partials.navbar_black')

    <section class="w-full h-full mx-auto py-12 md:py-24">
        <div class="flex flex-col md:flex-row gap-8">
          <div class="w-full md:w-1/2 p-16">
            <h2 class="text-base font-light text-zinc-400 mb-4 animated-element opacity-0 transition duration-300 ease-in-out">ABOUT BALI</h2>
            <p class="text-2xl md:text-3xl lg:text-5xl font-normal leading-tight md:leading-snug lg:leading-[1.2] text-zinc-800 animated-element opacity-0 transition duration-300 ease-in-out">
              <em class="font-medium font-century italic">Indonesia</em> is one of Southeast Asia's largest and <em class="font-medium font-century italic">fastest-growing</em> economies, making it a popular destination for <em class="font-medium font-century italic">property</em> and investment.
            </p>
            <p class="mt-8 md:mt-16 text-base leading-relaxed text-zinc-800 max-w-xl animated-element opacity-0 transition duration-300 ease-in-out">
                Is one of Southeast Asia's largest and fastest-growing economies, making it a popular destination for property and investment.
              </p>
          </div>
          <div class="w-full md:w-1/2 w-screen">
            <img 
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/84b09069ecd5b25d1478ef4d68d9a44c47ad333741e183ee5f57ef24561f8f81?placeholderIfAbsent=true&apiKey=d2a041474570455ea3b193ed2249e743" 
              alt="Illustration representing Indonesia's economic growth" 
              class="w-full h-ful object-fill inset-0 right-0"
              loading="lazy"
              width="800"
              height="600"
            />
          </div>
        </div>
       
      </section>
      
      <section class="grid grid-cols-2 md:grid-cols-4 lg:my-[20%] ml-8 lg:ml-28">
        <div class="flex flex-col max-w-[209px] mb-10 animated-element opacity-0 transition duration-300 ease-in-out">
            <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410]">
                <img loading="lazy" src="{{ asset('images/laurel.png') }}" class="object-fill absolute inset-0 size-full w-full h-full" alt="Background image for Global GDP ranking" />
                <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
                    7 <sub class="text-3xl">th</sub>
                </h2>
            </div>
            <p class="self-center mt-8 text-base tracking-wide leading-none text-zinc-800">
                Global GDP
            </p>
        </div>

        <div class="flex flex-col max-w-[209px] animated-element opacity-0 transition duration-300 ease-in-out">
          <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410]">
              <img loading="lazy" src="{{ asset('images/laurel.png') }}" class="object-fill absolute inset-0 size-full w-full h-full" alt="Background image for Global GDP ranking" />
              <p class="outline-layer-sans text-xl">TOP</p>
              <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
                  5
              </h2>
          </div>
          <p class="self-center mt-8 text-base tracking-wide leading-none text-zinc-800">
            Global economies by 2030
          </p>
      </div>

      <div class="flex flex-col max-w-[209px] animated-element opacity-0 transition duration-300 ease-in-out">
        <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410]">
            <img loading="lazy" src="{{ asset('images/laurel.png') }}" class="object-fill absolute inset-0 size-full w-full h-full bottom-0" alt="Background image for Global GDP ranking" />
            <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
                2%
            </h2>
        </div>
        <p class="self-center mt-8 text-base tracking-wide leading-none text-zinc-800">
          Annual inflation rate
        </p>
    </div>

    <div class="flex flex-col max-w-[209px] animated-element opacity-0 transition duration-300 ease-in-out">
      <div class="flex relative flex-col gap-1 items-center px-11 pt-4 pb-11 whitespace-nowrap aspect-[1.267] font-[410]">
          <img loading="lazy" src="{{ asset('images/laurel.png') }}" class="object-fill absolute inset-0 size-full w-full h-full" alt="Background image for Global GDP ranking" />
          <h2 class="relative outline-layer-sans flex text-7xl tracking-[2.7px] mt-auto">
              5%
          </h2>
      </div>
      <p class="self-center mt-8 text-base tracking-wide leading-none text-zinc-800">
        Yearly economic growth
      </p>
  </div>
  </section>

    <section class="grid grid-cols-2 my-32">
      <div class="w-full h-full pl-12 lg:pl-28">
        <div class="lg:w-3/5 flex flex-col">
          <p class="text-sm text-gray-400 uppercase tracking-wider mb-4 animated-element opacity-0 transition duration-300 ease-in-out">BENEFITS</p>
          <h1 class="text-4xl lg:text-5xl font-light text-gray-900 animated-element opacity-0 transition duration-300 ease-in-out">
            Benefits of investing in <span class="italic font-semibold font-century">Bali Real Estate</span>
          </h1>
        </div>

        <div class="w-full relative mt-16">
          <div class="space-y-12 flex flex-col lg:items-end">
              <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
                  <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
                      <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">01</span>
                  </div>
                  <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
                      <p>
                        Bali has long been a favorite destination for global tourists, but its appeal has only intensified over the years. According to the Bali Tourism Board, Bali consistently ranks among the top tourism spots in Southeast Asia.
                      </p>
                  </div>
              </div>


              <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
                <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
                    <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">02</span>
                </div>
                <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
                    <p>
                      Real estate in Bali is known for offering significantly higher rental yields compared to many other global markets. Rental returns in Bali’s short-term rental market can range from 10% to 20% annually
                    </p>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
              <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
                  <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">03</span>
              </div>
              <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
                  <p>
                    Bali’s real estate market has historically shown impressive capital appreciation. Real estate values in Bali can surge by 30-40% during the construction phase.
                  </p>
              </div>
          </div>

          <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
            <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
                <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">04</span>
            </div>
            <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
                <p>
                  Bali enjoys robust occupancy rates, especially in tourist-centric areas. Properties in high-demand locations have occupancy rates averaging between 70% and 80%
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-start lg:space-x-24">
          <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
              <span class="inset-0 text-transparent text-white -z-10 outline-layer animated-element opacity-0 transition duration-300 ease-in-out">05</span>
          </div>
          <div class="text-base lg:text-lg text-gray-700 leading-relaxed lg:w-3/5 animated-element opacity-0 transition duration-300 ease-in-out">
              <p>
                One of the most attractive aspects of investing in Bali real estate is the opportunity to enjoy the property as a personal holiday retreat, while simultaneously benefiting from its rental income.
              </p>
          </div>
        </div>
        </div>
        </div>
      
      </div>


      <div class="relative w-full">
        <img src="{{ asset('images/benefit-cover.png') }}" class="ml-auto" alt="">
        <img src="{{ asset('images/phone-2.png') }}" class="absolute inset-0 top-28 animated-element opacity-0 transition duration-300 ease-in-out" alt="">
      </div>
    </section>

    <section class="w-full h-full mb-12 lg:mb-28">

      <img src="{{ asset('images/bali-tourism-cover.png') }}" class="w-full h-full" alt="">

      <div class="grid grid-cols-1 md:grid-cols-2 container p-32 justify-items-center">

        <div class="lg:w-3/5 flex flex-col mb-10">
          <p class="text-sm text-gray-400 uppercase tracking-wider mb-4 animated-element opacity-0 transition duration-300 ease-in-out">ANALYTICS</p>
          <h1 class="text-4xl lg:text-5xl font-light text-gray-900 animated-element opacity-0 transition duration-300 ease-in-out">
            Bali Tourism <span class="italic font-semibold font-century">Statistics</span>
          </h1>
        </div>

        <div class="lg:w-5/6 pt-8">
          <h2 class="mb-10 text-lg md:text-2xl animated-element opacity-0 transition duration-300 ease-in-out">
            For the first 7 months of this year, from January to July 2024, Bali welcomed 3,538,899 foreign tourists, marking a significant increase of +22.18% compared to the corresponding period in the previous year. 
          </h2>

          <h2 class="mb-4 text-lg md:text-2xl animated-element opacity-0 transition duration-300 ease-in-out">
            Analyzing the monthly data, we find that the average growth rate for foreign tourists in 2024 stands at +48.95%. On average, Bali had recorded 505,557 monthly foreigners visitors in the 2024 period.
          </h2>
        </div>

      </div>


    </section>

    <section class="w-full justify-items-center mb-[18%]">

      <h1 class="text-6xl mb-16 animated-element opacity-0 transition duration-300 ease-in-out">Bali <span class="font-century italic">Tourism Places</span></h1>

      <div class="grid grid-cols-1 md:grid-cols-4 justify-items-center gap-5 mx-16">

        <div class="flex flex-col">
          <div class="relative w-full h-[500px] mb-5 overflow-hidden">
            <img src="{{ asset('images/canggu.png') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
          </div>
          <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Canggu</h1>
          <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">Canggu has become a central hub for digital nomads and long-term tourists seeking a balance of work and leisure. The area boasts a vibrant co-working scene.</p>
        </div>
        
        <div class="flex flex-col">
          <div class="relative w-full h-[500px] mb-5 overflow-hidden">
            <img src="{{ asset('images/ubud.png') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
          </div>
          <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Ubud</h1>
          <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">Ubud remains Bali's epicenter for wellness tourism, attracting people for yoga, meditation, retreats, and spiritual experiences.</p>
        </div>

        <div class="flex flex-col">
          <div class="relative w-full h-[500px] mb-5 overflow-hidden">
            <img src="{{ asset('images/nusa-dua.png') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
          </div>
          <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Nusa Dua</h1>
          <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">Nusa Dua is home to some of Bali's most luxurious resorts, international hotel chains, and exclusive villas, attracting high-end tourists looking for world-class amenities, privacy, and beachfront views.</p>
        </div>
        <div class="flex flex-col">
          <div class="relative w-full h-[500px] mb-5 overflow-hidden">
            <img src="{{ asset('images/uluwatu.png') }}" class="w-full h-full object-cover animated-element opacity-0 transition duration-300 ease-in-out" alt="">
          </div>
          <h1 class="text-6xl outline-layer mb-5 animated-element opacity-0 transition duration-300 ease-in-out">Uluwatu</h1>
          <p class="max-w-lg animated-element opacity-0 transition duration-300 ease-in-out">Uluwatu is renowned globally for its stunning cliffs and world-class surf breaks. This continues to draw professional surfers and enthusiasts from around the world.</p>
        </div>

      </div>

    </section>


    
    @include('sections.contact_us')

    <hr class="bg-white w-full">

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection