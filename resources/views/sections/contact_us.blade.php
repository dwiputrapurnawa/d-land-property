<section data-layername="contactUs" class="bg-black text-white mt-10">
  <div class="flex gap-5 max-md:flex-col px-20 py-40">
    <!-- Form Column -->
    <div data-layername="column" class="flex flex-col w-[33%] max-md:w-full">
      <div class="flex flex-col items-start self-stretch my-auto w-full text-xl max-md:mt-10 max-md:max-w-full relative">
        <h2 data-layername="interestedInMakingAProfitableInvestmentButUnfamiliarWithTheMarketSpecifics" class="animated-element opacity-0 transition duration-300 ease-in-out self-stretch text-4xl tracking-wider leading-10 text-white max-md:max-w-full">
          {{ __('landing.contact_us') }}
        </h2>
        <form class="w-full">
          <div class="mt-8 animated-element opacity-0 transition duration-300 ease-in-out">
            <label for="name" class="tracking-wider text-zinc-400">{{ __('landing.name_text') }}</label>
            <input type="text" id="name" name="name" class="w-full bg-transparent border-b border-zinc-400 mt-2 pb-2 focus:outline-none focus:border-white hover:border-white" required>
          </div>
          <div class="mt-6 animated-element opacity-0 transition duration-300 ease-in-out">
            <label for="email" class="tracking-wider text-zinc-400">{{ __('landing.email_text') }}</label>
            <input type="email" id="email" name="email" class="w-full bg-transparent border-b border-zinc-400 mt-2 pb-2 focus:outline-none focus:border-white hover:border-white" required>
          </div>
          <div class="mt-6 animated-element opacity-0 transition duration-300 ease-in-out">
            <label for="messenger" class="tracking-wider text-zinc-400">{{ __('landing.choose_messenger_text') }}</label>
            <div class="relative">
              <select id="messenger" name="messenger" class="w-full bg-transparent border-b border-zinc-400 mt-2 pb-2 appearance-none focus:outline-none focus:border-white hover:border-white">
                <option value="whatsapp">WhatsApp</option>
                <option value="telegram">Telegram</option>
                <option value="signal">Signal</option>
              </select>
              <svg class="w-4 h-4 mt-1 absolute right-0 bottom-3 object-contain aspect-[1.64] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
              </svg>
            </div>
          </div>
          <div class="mt-6 relative dropdown-parent animated-element opacity-0 transition duration-300 ease-in-out">
            <label for="phone" class="tracking-wider text-zinc-400 block">{{ __('landing.phone_text') }}</label>
            <div class="flex w-full items-center self-start">
              <div class="flex flex-col w-[15%]">
                <div class="country-code-select bg-transparent text-white p-2 cursor-pointer flex items-center justify-between">
                  <span class="text-sm font-light inline-flex items-center no-select">
                    <img src="/images/id-icon.png" class="w-6 h-6 mr-2" alt="">
                  </span>
                  <svg class="w-4 h-4 mt-1 arrow-up" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                  </svg>
                  <svg class="w-4 h-4 mt-2 hidden arrow-down" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6-6 6 6" />
                  </svg>


                    <!-- Dropdown -->
                <div class="dropdown absolute top-full left-0 mt-2 w-full bg-zinc-600 text-white rounded-lg shadow-lg z-10 transition duration-300 ease-in-out max-h-48 overflow-y-scroll flex-col">
                  <div class="p-2 cursor-pointer flex items-center" data-value="id" data-dial="+62" data-img="/images/id-icon.png">
                    <img src="/images/id-icon.png" class="w-6 h-6 mr-2" alt=""> Indonesia (+62)
                  </div>
                  <div class="p-2 cursor-pointer flex items-center" data-value="en" data-dial="+44" data-img="/images/en-icon.png">
                    <img src="/images/en-icon.png" class="w-6 h-6 mr-2" alt=""> United Kingdom (+44)
                  </div>
                  
                  <!-- More items can be added here -->
                </div>

                </div>


                
              </div>

              <div class="flex w-full">
                <div class="flex-col">
                  <input type="text" name="country_code" class="focus:outline-none bg-transparent" value="+62" readonly>
                </div>
                <div class="flex-col w-full">
                  <input type="number" name="phone" class="bg-transparent focus:outline-none w-full" required>
                </div>
              </div>
            </div>
            <hr class="shrink-0 mt-3.5 h-px border border-zinc-400 border-solid hr-input" />
          </div>
          <p class="mt-24 text-sm tracking-wide font-[405] text-zinc-400 w-[400px] max-md:mt-10">
            {{ __('landing.contact_us_agreement') }}
          </p>
        </form>
      </div>
    </div>

    <!-- Image Column -->
    <div data-layername="column" class="flex flex-col ml-5 w-[67%] max-md:w-full">
      <img loading="lazy" src="/images/contact_us_cover.png" alt="Investment market visualization" class="object-contain grow w-full aspect-[1.59] max-md:mt-10 max-md:max-w-full">
    </div>
  </div>
</section>
