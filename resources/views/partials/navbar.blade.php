  <!-- Navbar -->
  <nav class="bg-transparent py-6 relative hover:backdrop-filter hover:backdrop-blur-lg hover:bg-opacity-30 transition duration-700 ease-in-out">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 space-x-3">

        <!-- Logo -->
        <div class="flex items-center">
          <a href="#">
            <img src="/images/logo.png" alt="Logo" class="h-10 w-auto"> <!-- Replace with your image URL and size -->
          </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-16 max-md:space-x-8">
          <a href="#" class="text-white text-sm font-light underline-animation">Projects</a>
          <a href="#" class="text-white text-sm font-light underline-animation">About Us</a>
          <a href="#" class="text-white text-sm font-light underline-animation">Management</a>
          <a href="#" class="text-white text-sm font-light underline-animation">About Bali</a>
          <a href="#" class="text-white text-sm font-light underline-animation">News</a>
          
         <!-- Custom Language Selector -->
         <div class="relative">
          <div id="customSelect" class="bg-transparent text-white p-2 cursor-pointer flex items-center justify-between">
            <span class="text-sm font-light inline-flex items-center no-select">
              <img src="/images/en-icon.png" class="w-6 h-6 mr-2" alt="">
              English
          </span>
          
            <svg id="arrow-down" class="w-4 h-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
            </svg>

            <svg id="arrow-up" class="w-4 h-4 mt-2 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6-6 6 6" />
            </svg>
            
          </div>
          
          <div id="dropdown" class="dropdown absolute top-20 left-0 mt-1 w-full bg-slate-600 text-white bg-opacity-30 rounded-lg shadow-lg z-10 transition duration-300 ease-in-out">
            <div class="p-2 cursor-pointer inline-flex items-center" data-value="en"><img src="/images/en-icon.png" class="w-6 h-6 mr-2" alt=""> English</div>
            <div class="p-2 cursor-pointer inline-flex items-center" data-value="id"><img src="/images/id-icon.png" class="w-6 h-6 mr-2" alt=""> Bahasa</div>

          </div>
        </div>

          <a href="#" class="text-white text-sm font-light underline-animation flex items-center">
            Request Call 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2 w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </a>
          
        </div>
        

        <!-- Mobile Menu Button -->
        <div class="flex items-center md:hidden">
          <button id="menuButton" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden flex-col">
      
      <ul class="px-5 space-y-2 backdrop-filter backdrop-blur-lg">
        <li><a href="#" class="text-white text-sm font-light underline-animation">Projects</a></li>
        <li><a href="#" class="text-white text-sm font-light underline-animation">About Us</a></li>
        <li><a href="#" class="text-white text-sm font-light underline-animation">Management</a></li>
        <li><a href="#" class="text-white text-sm font-light underline-animation">About Bali</a></li>
        <li><a href="#" class="text-white text-sm font-light underline-animation">News</a></li>
        <li>
                 <!-- Custom Language Selector -->
       <div class="relative">
        <div id="customSelectMobile" class="bg-transparent text-white p-2 cursor-pointer flex items-center justify-between">
          <span class="text-sm font-light inline-flex items-center no-select">
            <img src="/images/en-icon.png" class="w-6 h-6 mr-2" alt="">
            English
        </span>
        
          <svg id="arrow-down-mobile" class="w-4 h-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
          </svg>

          <svg id="arrow-up-mobile" class="w-4 h-4 mt-2 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6-6 6 6" />
          </svg>
          
        </div>
        
        <div id="dropdownMobile" class="dropdown absolute top-20 left-0 mt-1 w-full bg-slate-600 text-white bg-opacity-30 rounded-lg shadow-lg z-10 transition duration-300 ease-in-out">
          <div class="p-2 cursor-pointer inline-flex items-center" data-value="en"><img src="/images/en-icon.png" class="w-6 h-6 mr-2" alt=""> English</div>
          <div class="p-2 cursor-pointer inline-flex items-center" data-value="id"><img src="/images/id-icon.png" class="w-6 h-6 mr-2" alt=""> Bahasa</div>

        </div>
      </div>
        </li>
        <li>
          <a href="#" class="text-white text-sm font-light underline-animation flex items-center">
            Request Call 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2 w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </a>
        </li>
      </ul>
        
    </div>

  </nav>