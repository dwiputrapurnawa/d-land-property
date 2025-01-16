  <!-- Navbar -->
  <nav id="nav-text-white" class="bg-transparent z-50 py-6 text-white relative hover:backdrop-filter hover:backdrop-blur-lg hover:bg-opacity-30 transition duration-700 ease-in-out">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 space-x-3">

        <!-- Logo -->
        <div class="flex items-center">
          <a href="/">
            <img id="logo-company" src="{{ asset('images/logo.webp') }}" alt="Logo" class="h-12 ml-5 md:h-16 w-auto"> <!-- Replace with your image URL and size -->
          </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-16 max-md:space-x-8">
          <a href="{{ route('projects.page') }}" class=" text-sm font-light underline-animation">{{ __('landing.navbar_project') }}</a>
          <a href="{{ route('about.us.page') }}" class=" text-sm font-light underline-animation">{{ __('landing.navbar_about_us') }}</a>
          <a href="{{ route('management.page') }}" class=" text-sm font-light underline-animation">{{ __('landing.navbar_managements') }}</a>
          <a href="{{ route('about.bali.page') }}" class=" text-sm font-light underline-animation">{{ __('landing.navbar_about_bali') }}</a>
          <a href="{{ route('news.page') }}" class=" text-sm font-light underline-animation">{{ __('landing.navbar_news') }}</a>
          
         <!-- Custom Language Selector -->
         <div class="relative">
          <div id="customSelect" class="bg-transparent  p-2 cursor-pointer flex items-center justify-between">
            <span class="text-sm font-light inline-flex items-center no-select">
              <img src="/images/en-icon.webp" class="w-6 h-6 mr-2" alt="">
              English
          </span>
          
            <svg id="arrow-down" class="w-4 h-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
            </svg>

            <svg id="arrow-up" class="w-4 h-4 mt-2 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6-6 6 6" />
            </svg>
            
          </div>
          
          <div id="dropdown" class="dropdown absolute top-20 left-0 mt-1 w-full bg-slate-600  bg-opacity-30 rounded-lg shadow-lg z-10 transition duration-300 ease-in-out">
            <div class="p-2 cursor-pointer inline-flex items-center" data-value="en"><img src="/images/en-icon.webp" class="w-6 h-6 mr-2" alt=""> English</div>
            <div class="p-2 cursor-pointer inline-flex items-center" data-value="id"><img src="/images/id-icon.webp" class="w-6 h-6 mr-2" alt=""> Bahasa</div>

          </div>
        </div>

          <button class="openRequestCallModalBtn  text-sm font-light underline-animation flex items-center">
            {{ __('landing.navbar_request_call') }}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2 w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </button>
          
        </div>
        

        <!-- Mobile Menu Button -->
        <div class="flex items-center md:hidden">
          <div id="burger-menu" class="relative w-6 h-6 flex flex-col gap-1.5 items-end cursor-pointer">
            <div class="bar w-4 h-0.5 bg-current transform transition-transform duration-300 ease-in-out"></div>
            <div class="bar w-6 h-0.5 bg-current transform transition-transform duration-300 ease-in-out"></div>
            <div class="bar w-4 h-0.5 bg-current transform transition-transform duration-300 ease-in-out"></div>
          </div>
          
          
          
        </div>

      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden flex-col h-screen z-50">

      <div class="relative p-4 mb-6 mt-6">
        <div id="customSelectMobile" class="bg-transparent p-2 cursor-pointer inline-flex items-center justify-between w-auto">
          <span class="text-sm font-light inline-flex items-center no-select">
              <img src="/images/en-icon.webp" class="w-6 h-6 mr-2" alt="">
              English
          </span>
      
          <svg id="arrow-down-mobile" class="w-4 h-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
          </svg>
      
          <svg id="arrow-up-mobile" class="w-4 h-4 mt-2 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6-6 6 6" />
          </svg>
      </div>
      
        
        <div id="dropdownMobile" class="dropdown absolute left-6 top-14 left-0 mt-1 w-[50%] bg-white rounded-lg shadow-lg z-10 transition duration-300 ease-in-out">
          <div class="p-2 cursor-pointer inline-flex items-center" data-value="en"><img src="/images/en-icon.webp" class="w-6 h-6 mr-2" alt=""> English</div>
          <div class="p-2 cursor-pointer inline-flex items-center" data-value="id"><img src="/images/id-icon.webp" class="w-6 h-6 mr-2" alt=""> Bahasa</div>

        </div>
      </div>
      
      <ul class="px-5 space-y-2 z-50">
        <li><a href="{{ route('home.page') }}" class=" text-3xl font-light underline-animation">{{ __('landing.navbar_home') }}</a></li>
        <li><a href="{{ route('projects.page') }}" class="text-3xl font-light underline-animation">{{ __('landing.navbar_project') }}</a></li>
        <li><a href="{{ route('about.us.page') }}" class="text-3xl font-light underline-animation">{{ __('landing.navbar_about_us') }}</a></li>
        <li><a href="{{ route('management.page') }}" class="text-3xl font-light underline-animation">{{ __('landing.navbar_managements') }}</a></li>
        <li><a href="{{ route('about.bali.page') }}" class="text-3xl font-light underline-animation">{{ __('landing.navbar_about_bali') }}</a></li>
        <li><a href="{{ route('news.page') }}" class=" text-3xl font-light underline-animation">{{ __('landing.navbar_news') }}</a></li>
        <li>


        </li>
        <li>
          <button id="open-request-call-mobile" class="text-3xl font-light underline-animation flex items-center">
            {{ __('landing.navbar_request_call') }}
          </button>
        </li>
      </ul>

      <div class="flex flex-col items-center mt-12">
        <div class="w-full max-w-screen-lg flex justify-between px-5">
          <a href="{{ $company->instagram }}" class="underline text-md" style="text-underline-offset: 8px;">Instagram</a>
          <a href="{{ $company->youtube }}" class="underline text-md" style="text-underline-offset: 8px;">Youtube</a>
          <a href="https://wa.me/{{ str_replace([' ', '-'], '', $company->phone) }}" class="underline text-md" style="text-underline-offset: 8px;">Whatsapp</a>
        </div>
      </div>

      <div class="flex flex-col px-5 mt-12 w-[300px]">
        <p class="text-sm">{{ $company->phone }}</p>
        <p class="text-sm">{{ $company->address }}</p>
        
      </div>

      <p class="text-sm tracking-wide font-[405] text-zinc-400 mt-20 mb-6 px-4 lg:px-8 text-center sm:text-start">
        {{ __('landing.footer_text') }}
      </p>
      
      
        
    </div>

  </nav>