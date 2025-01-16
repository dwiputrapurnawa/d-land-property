<div id="requestCallModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-40">
  <div class="relative flex flex-col text-white w-full max-w-md mx-auto rounded-lg overflow-hidden sm:max-w-sm md:max-w-md">
    <button id="requestModalCloseBtn" class="absolute top-3 right-3 text-white text-xl focus:outline-none z-50">
      <img src="{{ asset('images/exit-button.webp') }}" class="w-4 h-4" alt="Close">
    </button>

    <header class="flex flex-col items-center px-4 py-6 sm:px-6 md:px-8 w-full shadow-2xl bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg">
      <div class="w-full max-w-xs">
        <h2 class="text-center text-xl sm:text-2xl tracking-wider leading-8 font-light mb-6 sm:mb-8">
          {{ __('landing.request_call_header_text') }}
        </h2>

        <form class="w-full contact-us-form">
          <input type="hidden" name="contact-us-url" value="{{ route('consultation.store') }}">
          <div class="mt-4">
            <label for="name" class="tracking-wider text-white text-sm">{{ __('landing.name_text') }}</label>
            <input type="text" name="name" class="w-full bg-transparent border-b border-white mt-1 pb-1 focus:outline-none focus:border-white" required>
          </div>
          <div class="mt-4">
            <label for="email" class="tracking-wider text-white text-sm">{{ __('landing.email_text') }}</label>
            <input type="email" name="email" class="w-full bg-transparent border-b border-white mt-1 pb-1 focus:outline-none focus:border-white" required>
          </div>
          <div class="mt-4">
            <label for="messenger" class="tracking-wider text-white text-sm">{{ __('landing.choose_messenger_text') }}</label>
            <div class="relative">
              <select id="messenger" name="messenger" class="w-full bg-transparent border-b border-white mt-1 pb-1 appearance-none focus:outline-none focus:border-white">
                <option value="whatsapp">WhatsApp</option>
              </select>
              <svg class="w-4 h-4 absolute right-0 bottom-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
              </svg>
            </div>
          </div>
          <div class="mt-4 relative dropdown-parent">
            <label for="phone" class="tracking-wider text-white text-sm">{{ __('landing.phone_text') }}</label>
            <div class="flex items-center">
              <div class="w-1/5">
                <div class="country-code-select bg-transparent text-white p-2 cursor-pointer flex items-center justify-between">
                  <span class="text-sm font-light inline-flex items-center no-select">
                    <img src="{{ asset('flags/ID.svg') }}" class="w-9 h-9 mr-2" alt="">
                  </span>
                  <svg class="w-4 h-4 mt-1 arrow-up" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                  </svg>
                  <svg class="w-4 h-4 mt-2 hidden arrow-down" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6-6 6 6" />
                  </svg>


                    <!-- Dropdown -->
                <div class="dropdown absolute top-full left-0 mt-2 w-full bg-zinc-600 text-white rounded-lg shadow-lg z-10 transition duration-300 ease-in-out max-h-48 overflow-y-scroll flex-col">
                  <input type="text" class="w-full bg-zinc-600 py-2 px-4 input-search border-none focus:outline-none" name="search" placeholder="Search ...">

                      <div class="item-dropdown">
              
                      </div>
                </div>

                </div>
              </div>
              <input type="text" name="country_code" class="w-[15%] bg-transparent focus:outline-none text-sm" value="+62" readonly>
              <input type="text" name="phone" class="bg-transparent focus:outline-none w-full text-sm" required>
            </div>
            <hr class="mt-3.5 border border-white">
          </div>

          <button class="getConsultationButton mt-6 w-full px-6 py-3 text-base text-white font-semibold border border-solid border-white rounded-full hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-zinc-500 transition duration-200">
            {{ __('landing.get_consultation_text') }}
          </button>

          <p class="mt-12 text-xs tracking-wide text-center font-light text-white">
            {{ __('landing.contact_us_agreement') }}
          </p>
        </form>
      </div>
    </header>
  </div>
</div>
