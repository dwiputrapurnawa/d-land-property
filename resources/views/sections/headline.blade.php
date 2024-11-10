<section id="section_headline" class="flex flex-col">
    <header class="relative h-screen">

     <img src="/images/hero.png" alt="Background Image" class="absolute inset-0 w-full h-full object-cover z-0">
 
     <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10 lg:bottom-16 lg:left-16 z-10 animated-element opacity-0 transition duration-300 ease-in-out">
         <p class="text-sm md:text-base lg:text-lg text-white font-light max-w-[250px] sm:max-w-[300px] md:max-w-[350px] lg:max-w-[400px]">
            {{ __('landing.subheadline') }}
         </p>
     </div>

     @include('partials.navbar')    
       
         <h1 class="text-white animated-element opacity-0 transition duration-300 ease-in-out relative self-center mt-40 text-8xl text-center leading-[90px] max-md:mt-10 max-md:max-w-full max-md:text-4xl max-md:leading-10">
             <span class="font-[405]">{{ __('landing.headline_1') }}</span>
             <span class="italic font-medium font-serif">{{ __('landing.headline_2') }}</span>
             <br />
             <span class="font-[405]">{{ __('landing.headline_3') }}</span>
         </h1>
       
 

    </header>
     
 </section>