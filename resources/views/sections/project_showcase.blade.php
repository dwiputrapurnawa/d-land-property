<section class="section_project_showcase" class="flex z-10 flex-col -mt-3 w-full px-5 md:px-40">
    <div class="pl-10 pr-10 pb-40 md:px-32 md:py-20">
      <!-- Heading -->
      <h1 class="text-2xl sm:text-4xl tracking-wider leading-10 w-full sm:w-[872px] md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out">
        {{ __('landing.projects_showcase_title_1') }} <span class="inline-block transform scale-x-150">—</span> {{ __('landing.projects_showcase_title_2') }}
      </h1>
  
      <div class="w-full max-w-[981px] mx-auto mt-32">
        <!-- Upper Section -->
        <div class="flex sm:flex-row gap-8 justify-between items-center mt-8 sm:mt-12 text-sm sm:text-xl md:text-2xl tracking-wider leading-none text-center animated-element opacity-0 transition duration-300 ease-in-out">
          
          <div class="flex-col space-y-10 w-full h-full">
            <p class="text-xl md:text-4xl">{{ __('landing.projects_showcase_text') }}</p>
            <p class="sm:text-xs text-gray-900">{{ __('landing.projects_showcase_capital_gain') }}</p>
          </div>
      
          <div class="flex-col space-y-10 w-full">
            <p class="text-xl md:text-4xl">ROI 13%</p>
            <p class="sm:text-xs text-gray-900">{{ __('landing.projects_showcase_rental_cash_flow') }}</p>
          </div>
      
          <div class="flex-col space-y-10 w-full">
            <p class="text-xl md:text-4xl">70%</p>
            <p class="sm:text-xs text-gray-900">{{ __('landing.projects_showcase_occupancy_rate') }}</p>
          </div>
          
        </div>
      </div>
      
      
      <hr class="w-full h-px border border-solid border-zinc-800 relative bottom-10">  <!-- Horizontal Line (Responsive) -->
      
  
      <div class="mt-10 flex flex-col relative">
        <!-- Phone Image (Responsive) -->
        <img id="phone-img" src="/images/phone.png" class="absolute bottom-0 sm:bottom-[-100px] right-4 z-10 animated-element opacity-0 transition duration-300 ease-in-out w-[150px] sm:w-[200px] md:w-[300px]">


        
        <!-- Project Presentation Section -->
        <section id="project-presentation" class="z-10 absolute flex flex-col rounded-none max-w-[90%] sm:max-w-[762px] bottom-5 left-2 sm:bottom-10 sm:left-[-100px] backdrop-filter backdrop-blur-lg animated-element opacity-0 transition duration-300 ease-in-out md:left-[-50px]">
          <header class="relative flex w-full flex-col items-end pt-5 sm:pt-28 pr-5 sm:pr-7 pb-5 sm:pb-8 pl-4 sm:pl-20 w-full bg-white bg-opacity-10 max-md:px-5 max-md:pt-24 max-md:max-w-full">
            <div class="w-full max-w-[90%] sm:max-w-[596px]">
              <div class="flex gap-5 flex-col sm:flex-row w-full">
                <!-- Left Side (Project Presentation) -->
                <div class="flex flex-col w-full sm:w-[66%] relative">
                  <div class="flex flex-col w-full text-white sm:mt-10 relative dropdown-parent">
                    <div class="flex gap-5 justify-between text-lg sm:text-xl tracking-wide">
                      <img loading="lazy" src="{{ asset('images/downloads.png') }}" alt="logo" class="object-contain shrink-0 w-10 sm:w-12 rounded-none aspect-[0.96]" />
                      <h2 class="my-auto text-sm sm:text-base w-[200px] sm:w-[268px]">{{ __('landing.projects_showcase_get_project_presentation') }}</h2>
                    </div>
                    <div class="flex items-center self-start mt-6 sm:mt-16 text-sm sm:text-base h-full">
                      <div class="country-code-select bg-transparent text-white p-2 cursor-pointer flex items-center justify-between">
                          <span class="text-sm font-light inline-flex items-center no-select">
                              <img src="/images/id-icon.png" class="w-6 h-6 mr-2" alt="">
                          </span>

                          <div class="mx-2">
                            <img src="{{ asset('images/arrow-up.png') }}" alt="" class="arrow-up hidden">
                            <img src="{{ asset('images/arrow-down.png') }}" alt="" class="arrow-down">
                          </div>
                  
                  
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
                  
                      <div class="flex w-full h-full flex-col justify-end">
                          <div class="flex w-full h-full">
                              <!-- Country code input container -->
                              <div class="flex-col relative flex-grow">
                                  <input type="text" name="country_code" class="focus:outline-none bg-transparent w-full h-full border-r-0" value="+62" readonly>
                              </div>
                              <!-- Phone number input container -->
                              <div class="flex-col w-full flex-grow">
                                  <input type="number" name="phone" class="bg-transparent focus:outline-none w-full h-full border-l-0" required>
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
                  <div class="flex flex-col grow mt-10 sm:mt-28 text-xs sm:text-sm tracking-wide text-white font-[410] w-full">
                    <button class="get-presentation-btn absolute bottom-0 right-10 px-3 w-auto py-3 border border-white border-solid rounded-[30px] text-white hover:bg-zinc-700">{{ __('landing.projects_showcase_get_in_whatsapp') }}</button>
                  </div>

                 
                </div>
              </div>
            </div>
            <p class="mt-3 text-xs sm:text-sm tracking-wide font-[405] text-zinc-400">{{ __('landing.projects_showcase_agreement') }}</p>
          </header>
        </section>
        
  
        <!-- Villa Image -->
        <img loading="lazy" src="/images/villa.png" class="object-contain w-full aspect-[2.24]">
  
        <!-- Footer Section -->
        <section class="flex bg-neutral-900 min-h-[300px] max-md:min-h-[200px]">
        </section>
      </div>
    </div>
  </section>