<section id="section_headline" class="flex flex-col bg-right bg-bottom bg-cover bg-[url('/images/hero-mobile.png')] sm:bg-[url('/images/hero.png')]">
    <header class="relative h-screen">
 
     <div class="absolute bottom-10 left-5 md:bottom-10 md:left-10 lg:bottom-16 lg:left-16 z-10 animated-element opacity-0 transition duration-300 ease-in-out">
         <p class="text-sm md:text-base lg:text-lg text-white font-light font-thin max-w-[250px] sm:max-w-[300px] md:max-w-[350px] lg:max-w-[400px]">
            {{ __('landing.subheadline') }}
         </p>
     </div>

     @include('partials.navbar_white')    
       
    <h1 class="text-white animated-element opacity-0 transition duration-300 ease-in-out relative self-center mt-40 lg:text-7xl sm:text-xl text-center leading-[90px] max-md:mt-40 max-md:max-w-full max-md:text-5xl max-md:leading-10">
    <span class="font-[405] tracking-tight max-md:block max-md:w-full md:inline mb-2">{{ __('landing.headline_1') }}</span>
    <span class="italic font-medium font-century mb-2">{{ __('landing.headline_2') }}</span>
    <br />
    <span class="font-[405] tracking-tight">{{ __('landing.headline_3') }}</span>
</h1>

    
    </header>
</section>
