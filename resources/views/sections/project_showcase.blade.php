<section class="section_project_showcase" class="flex z-10 flex-col -mt-3 w-full px-5 md:px-40">
    <div class="w-full h-full">
      

      <div class="w-full h-full px-10 md:px-24">
        <!-- Heading -->
        @if($project)
          <h1 class="text-2xl sm:text-4xl tracking-wider leading-10 w-full sm:w-[872px] md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out">
            {{ $project->project_showcase_title }} <!-- Access the first item in the collection -->
          </h1>
      
          {{-- DESKTOP --}}
          <div class="w-full max-w-[981px] mx-auto mt-12 sm:block hidden">
            <!-- Upper Section -->
            <div class="flex sm:flex-row gap-8 justify-between items-center mt-8 sm:mt-12 text-sm sm:text-xl md:text-2xl tracking-wider leading-none text-center animated-element opacity-0 transition duration-300 ease-in-out">
              <div class="flex-col space-y-10 w-full h-full">
                <p class="text-xl md:text-4xl">{{ __('landing.projects_showcase_text') }} {{ $project->capital_gain }}%</p> <!-- Access the first item -->
                <p class="sm:text-xs text-gray-400">{{ __('landing.projects_showcase_capital_gain') }}</p>
              </div>
      
              <div class="flex-col space-y-10 w-full">
                <p class="text-xl md:text-4xl">ROI {{ $project->rental_cash_flow }}%</p> <!-- Access the first item -->
                <p class="sm:text-xs text-gray-400">{{ __('landing.projects_showcase_rental_cash_flow') }}</p>
              </div>
      
              <div class="flex-col space-y-10 w-full">
                <p class="text-xl md:text-4xl">{{ $project->occupancy_rate }}%</p> <!-- Access the first item -->
                <p class="sm:text-xs text-gray-400">{{ __('landing.projects_showcase_occupancy_rate') }}</p>
              </div>
            </div>
          </div>
      
          <hr class="w-full h-px border border-solid border-zinc-800 relative bottom-10 sm:block hidden">
      
          {{-- MOBILE --}}
          <div class="w-full max-w-[981px] mx-auto mt-12 sm:hidden block">
            <!-- Upper Section -->
            <div class="flex flex-col gap-8 justify-between items-center mt-8 sm:mt-12 text-sm sm:text-xl md:text-2xl tracking-wider leading-none text-center animated-element opacity-0 transition duration-300 ease-in-out">
              <div class="flex-col w-full h-full">
                <div class="grid grid-cols-2 w-full h-full items-center">
                  <p class="text-3xl text-left">up to {{ $project->capital_gain }}%</p> <!-- Access the first item -->
                  <p class="sm:text-xs text-gray-400 text-left">{{ __('landing.projects_showcase_capital_gain') }}</p>
                </div>
      
                <hr class="w-full h-px border border-solid border-grey-600">
              </div>
      
              <div class="flex-col w-full h-full">
                <div class="grid grid-cols-2 w-full h-full items-center">
                  <p class="text-3xl text-left">ROI {{ $project->rental_cash_flow }}%</p> <!-- Access the first item -->
                  <p class="sm:text-xs text-gray-400 text-left">{{ __('landing.projects_showcase_rental_cash_flow') }}</p>
                </div>
      
                <hr class="w-full h-px border border-solid border-grey-600">
              </div>
      
              <div class="flex-col w-full h-full">
                <div class="grid grid-cols-2 w-full h-full items-center">
                  <p class="text-3xl text-left">{{ $project->occupancy_rate }}%</p> <!-- Access the first item -->
                  <p class="sm:text-xs text-gray-400 text-left">{{ __('landing.projects_showcase_occupancy_rate') }}</p>
                </div>
      
                <hr class="w-full h-px border border-solid border-grey-600">
              </div>
            </div>
          </div>
        @else
          {{-- <p>{{ __('landing.project_not_found') }}</p> --}}
        @endif
      </div>
      
    
  


    
      
      <div class="mt-16 flex flex-col relative md:px-24">
            <!-- Phone Image (Responsive) -->
      <img 
      id="phone-img" 
      src="/images/phone.png" 
      class="absolute bottom-0 sm:bottom-[-100px] right-32 z-10 animated-element opacity-0 transition duration-300 ease-in-out 
      w-[150px] sm:w-[180px] md:w-[250px] lg:w-[300px] xl:w-[350px] 
      hidden sm:block">

      


        
        <!-- Project Presentation Section -->
        <section id="project-presentation" class="z-10 absolute flex flex-col rounded-none max-w-[90%] sm:max-w-[700px] bottom-5 left-6 md:left-2 sm:bottom-10 sm:left-[-100px] backdrop-filter backdrop-blur-lg animated-element opacity-0 transition duration-300 ease-in-out md:left-[60px]">
          <header class="relative flex w-full flex-col items-end pt-5 sm:pt-28 pr-5 sm:pr-7 pb-5 sm:pb-8 pl-4 sm:pl-20 w-full bg-white bg-opacity-10 max-md:px-5 max-md:pt-24 max-md:max-w-full">
            <div class="w-full max-w-[90%] sm:max-w-[596px]">
              <div class="flex gap-5 flex-col sm:flex-row w-full">
                <!-- Left Side (Project Presentation) -->
                <div class="flex flex-col w-full sm:w-[66%] relative">
                  <div class="flex flex-col w-full text-white sm:mt-10 relative dropdown-parent">
                    <div class="flex gap-5 justify-between text-lg sm:text-xl tracking-wide">
                      <img loading="lazy" src="{{ asset('images/downloads.png') }}" alt="logo" class="object-contain shrink-0 w-10 sm:w-12 rounded-none aspect-[0.96]" />
                      <h2 class="my-auto text-lg sm:text-base sm:w-[268px]">{{ __('landing.projects_showcase_get_project_presentation') }}</h2>
                    </div>
                    <div class="flex items-center self-start mt-6 sm:mt-16 text-sm sm:text-base h-full">
                      <div class="country-code-select bg-transparent text-white p-2 cursor-pointer flex items-center justify-between">
                          <span class="text-sm font-light inline-flex items-center no-select">
                              <img src="{{ asset('flags/ID.svg') }}" class="w-9 h-9 mr-2" alt="">
                          </span>
        
                          <div class="mx-2">
                            <img src="{{ asset('images/arrow-up.png') }}" alt="" class="arrow-up hidden">
                            <img src="{{ asset('images/arrow-down.png') }}" alt="" class="arrow-down">
                          </div>
        
                          <!-- Dropdown -->
                          <div class="dropdown absolute top-full left-0 mt-2 w-full bg-zinc-600 text-white rounded-lg shadow-lg z-10 transition duration-300 ease-in-out max-h-48 overflow-y-scroll flex-col">
                            <input type="text" class="w-full bg-zinc-600 py-2 px-4 input-search border-none focus:outline-none" name="search" placeholder="Search ...">
        
                            <div class="item-dropdown">
                            </div>
                          </div>
                      </div>
        
                      <div class="flex w-full h-full flex-col justify-end">
                          <div class="flex w-full h-full">
                              <!-- Country code input container -->
                              <div class="flex-col relative">
                                  <input type="text" name="country_code" class="focus:outline-none bg-transparent w-full h-full border-r-0" value="+62" readonly>
                              </div>
                              <!-- Phone number input container -->
                              <div class="flex-col w-full flex-grow">
                                  <input type="text" name="phone" class="bg-transparent focus:outline-none w-full h-full border-l-0" required>
                              </div>
                              <input type="hidden" name="project-presentation-url" value="{{ route('project.presentation.store') }}">
                          </div>
                      </div>
                  </div>
        
                    <hr class="shrink-0 mt-3.5 h-px border border-zinc-400 border-solid hr-input" />
                  </div>
                </div>
                <!-- Right Side (WhatsApp Button) -->
                <div class="flex flex-col sm:ml-5 w-full relative">
                  <div class="flex flex-col sm:items-end sm:justify-start items-center justify-center grow mt-10 sm:mt-28 text-xs sm:text-sm tracking-wide text-white font-[410] w-full relative">
                    <button class="get-presentation-btn px-3 w-auto py-3 border border-white border-solid rounded-[30px] text-white hover:bg-zinc-700 absolute bottom-0">
                      {{ __('landing.projects_showcase_get_in_whatsapp') }}
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <p class="mt-3 text-xs sm:text-sm tracking-wide font-[405] text-zinc-400">{{ __('landing.projects_showcase_agreement') }}</p>
          </header>
        </section>
        
        
  
        <!-- Villa Image -->
        <img loading="lazy" src="{{ asset('images/villa.png') }}" class="object-contain w-screen aspect-[2.24]">
  
        <!-- Footer Section -->
        <section class="flex bg-neutral-900 min-h-[300px]">
        </section>
      </div>
    </div>
  </section>