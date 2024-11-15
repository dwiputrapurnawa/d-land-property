<section class="flex flex-col lg:flex-row px-6 py-16 lg:px-32 lg:py-24 w-full relative space-y-12 lg:space-y-0 lg:mx-20">
    <!-- Title and Heading on the Left -->
    <div class="lg:w-1/3 flex flex-col">
        <p class="text-sm text-gray-400 uppercase tracking-wider mb-4 flex animated-element opacity-0 transition duration-300 ease-in-out">OUR TEAM</p>
        <h1 class="text-4xl lg:text-5xl font-light text-gray-900 flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
            <span>Our</span>
            <span class="italic font-semibold font-century">Team</span>
        </h1>
    </div>
    

    <!-- Value Items Section -->
    <div class="w-full relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
            
            @for ($i = 0; $i < 9; $i++)

            <div class="max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg w-full p-4 sm:p-6 rounded-lg animated-element opacity-0 transition duration-300 ease-in-out">
                <div class="flex flex-col items-start">
                    <div class="w-full h-48 sm:h-52 md:h-56 lg:h-64 bg-gray-300 rounded mb-4"></div>
                    
                    {{-- Information Section --}}
                    <div class="text-left w-full">
                        <p class="text-lg sm:text-xl md:text-2xl font-semibold">First Name</p>
                        <p class="text-lg sm:text-xl md:text-2xl font-semibold font-century">Last Name</p>
                        <p class="text-sm sm:text-base md:text-lg mt-2">Positions</p>
                    </div>
                </div>
            </div>
            
            @endfor
            
        </div>
    </div>
</section>