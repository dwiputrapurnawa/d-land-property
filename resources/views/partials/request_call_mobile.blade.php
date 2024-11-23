<section id="requestCallMobile" class="flex flex-col bg-black text-white hidden md:hidden z-20 overflow-auto h-screen min-h-screen relative animated-element opacity-0 transition duration-300 ease-in-out">
  

  <!-- Full-Top Image -->
  <div class="w-full relative z-0">
    <img 
      loading="lazy" 
      src="{{ asset('images/cover-2.png') }}" 
      alt="Investment market visualization" 
      class="object-cover w-full h-[50vh] max-md:h-auto"
    >
  </div>

    {{-- Menu --}}
    <div class="py-6 absolute inset-0 z-10">
      <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 space-x-3">
          <!-- Logo -->
          <div class="flex items-center">
            <a href="/">
              <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 ml-5 md:h-16 w-auto"> <!-- Replace with your image URL and size -->
            </a>
          </div>
  
          <div id="request-mobile-close" class="flex items-center md:hidden">
            <div class="relative w-6 h-6">
              <div class="absolute w-6 h-0.5 bg-current transform rotate-45 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
              <div class="absolute w-6 h-0.5 bg-current transform -rotate-45 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Form Section -->
  <div class="flex flex-col w-[33%] max-md:w-full px-6 z-30">
    <div class="flex flex-col items-start self-stretch my-auto w-full text-xl max-md:mt-10 max-md:max-w-full relative">
      <h2 class=" self-stretch text-xl sm:text-3xl text-center sm:text-start tracking-wider text-white max-md:max-w-full">
        {{ __('landing.contact_us') }}
      </h2>
      <form class="w-full contact-us-form" method="POST">
        <input type="hidden" name="contact-us-url" value="{{ route('consultation.store') }}">
        <div class="mt-8">
          <label for="name" class="text-lg text-zinc-400">{{ __('landing.name_text') }}</label>
          <input type="text" name="name" class="w-full bg-transparent border-b border-zinc-400 mt-2 pb-2 focus:outline-none focus:border-white hover:border-white" required>
        </div>
        <div class="mt-6">
          <label for="email" class="text-lg text-zinc-400">{{ __('landing.email_text') }}</label>
          <input type="email" name="email" class="w-full bg-transparent border-b border-zinc-400 mt-2 pb-2 focus:outline-none focus:border-white hover:border-white" required>
        </div>
        <div class="mt-6">
          <label for="messenger" class="text-lg text-zinc-400">{{ __('landing.choose_messenger_text') }}</label>
          <div class="relative">
            <select id="messenger" name="messenger" class="w-full bg-transparent border-b border-zinc-400 mt-2 pb-2 appearance-none focus:outline-none focus:border-white hover:border-white">
              <option value="whatsapp">WhatsApp</option>
            </select>
            <svg class="w-4 h-4 mt-1 absolute right-0 bottom-3 object-contain aspect-[1.64] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
            </svg>
          </div>
        </div>
        <div class="mt-6 relative dropdown-parent z-50">
          <label for="phone" class="text-lg text-zinc-400 block">{{ __('landing.phone_text') }}</label>
          <div class="flex w-full items-center self-start">
            <div class="flex flex-col w-[15%]">
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

            <div class="flex w-full">
              <div class="flex-col">
                <input type="text" name="country_code" class="focus:outline-none bg-transparent" value="+62" readonly>
              </div>
              <div class="flex-col w-full">
                <input type="text" name="phone" class="bg-transparent focus:outline-none w-full" required>
              </div>
            </div>
          </div>
          <hr class="shrink-0 mt-3.5 h-px border border-zinc-400 border-solid hr-input" />

         
        
        </div>

        <button
        class="getConsultationButton mt-10 w-full px-8 py-3 text-base sm:text-lg tracking-wide text-white font-[410] border border-solid border-zinc-400 rounded-[30px] hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-zinc-500 transition-colors "
        aria-label="Get a consultation"
      >
        GET A CONSULTATION
      </button>
       
      <p class="mt-10 text-sm tracking-wide font-[405] text-zinc-400 w-full max-md:mt-10 text-center">
        {{ __('landing.contact_us_agreement') }}
      </p>
      
      </form>
    </div>
  </div>
</section>
