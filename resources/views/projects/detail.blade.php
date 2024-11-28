@extends('layouts.main')

@section('title')
    D'Land Property - Projects
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    <div class="relative h-screen">
        <img src="{{ asset('images/img-5.png') }}" class="w-full h-full absolute inset-0 object-cover" alt="">
    
        @include('partials.navbar_white')
    
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-5xl md:text-6xl text-white text-center">D'Land</h1>
            <h1 class="text-6xl md:text-7xl text-white text-center font-century uppercase">Mumbul Villa</h1>
        
            <p class="text-white absolute bottom-5 text-center">BALI, INDONESIA</p>
        </div>
        
        
    </div>
    
    <div class="w-full h-full pb-24">
        <div class="flex flex-col px-8 md:px-24 py-24 items-start">
            <p class="text-sm text-gray-400">VILLA</p>
            <h1 class="text-6xl pb-12">D'Land <br><span class="font-century">Mumbul Villa</span></h1>
            <p class="text-gray-400 w-[300px]">{{ $company->address }}</p>
        </div>
    
        <div class="flex flex-col px-auto md:px-12">
            <img src="{{ asset('images/project-detail.gif') }}" class="object-cover w-full h-full" alt="">
        </div>

        <div class="grid grid-cols-1  md:grid-cols-2 px-12 py-28">
            <div class="flex flex-col items-center">
                <img
                loading="lazy"
                src="/images/logo-substract.png"
                alt="About D'Land Properties"
                class="object-contain w-full max-w-[200px] sm:max-w-[200px] md:max-w-[200px] aspect-[0.83] mx-auto md:mx-0 hidden sm:block"
            >
            </div>

            <div class="flex flex-col">
                <h1 class="text-3xl">D'Land Mumbul Villa is a luxury villa that offers an unparalleled living experience in the heart of Nusa Dua. Elegantly designed and built to the highest standards, this villa complex consists of only 12 exclusive units, making it a highly lucrative investment for property seekers.</h1>
                <div class="grid grid-cols-2 md:grid-cols-5 py-12 md:py-6 gap-5">
                    <div class="flex flex-col">
                        <h1 class="text-lg md:text-md font-bold">Price From</h1>
                        <p class="text-xl md:text-lg text-gray-400">Start From IDR 2.2B</p>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg md:text-md font-bold">Location</h1>
                        <p class="text-xl md:text-lg text-gray-400">Nusa Dua, Bali</p>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg md:text-md font-bold">Capital Gain</h1>
                        <p class="text-xl md:text-lg text-gray-400">10% (1st Year)</p>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg md:text-md font-bold">Quantity</h1>
                        <p class="text-xl md:text-lg text-gray-400">11 Villas</p>
                    </div>
                    <div class="flex flex-col items-center justify-center hidden md:block">
                        <a href="/" class="border border-black w-auto flex items-center justify-center rounded px-4 py-2">BOOK NOW</a>
                    </div>
                </div>
                
                
                
            </div>
        </div>

        <img src="{{ asset('images/img-detail.png') }}" class="w-full h-full object-cover" alt="">
    </div>

    @include('sections.project_showcase')

    <div class="grid grid-cols-1 md:grid-cols-2 py-24 md:px-28 px-8 gap-y-6">
        <!-- Reverse order on mobile screens -->
        <div class="order-2 md:order-1 flex flex-col px-6 md:px-24 mt-auto">
            <p class="text-sm text-gray-400 pb-4">UNIT TYPES</p>
            <h1 class="text-5xl">D'Land</h1>
            <h1 class="text-5xl"><span class="font-century">Mumbul</span> Villa</h1>
    
            <div class="grid grid-cols-2 py-12 gap-12">
                <div class="flex flex-col">
                    <h1 class="text-md font-bold">Area:</h1>
                    <p class="text-gray-400">Start from 110m<sup>2</sup></p>
                </div>
                <div class="flex flex-col">
                    <h1 class="text-md font-bold">Building Area:</h1>
                    <p class="text-gray-400">110m<sup>2</sup></p>
                </div>
    
                <div class="flex flex-col">
                    <h1 class="text-md font-bold">Full Finished</h1>
                    <h1 class="text-md font-bold">Sunken Living</h1>
                    <h1 class="text-md font-bold">Garden</h1>
                    <h1 class="text-md font-bold">Powder Room</h1>
                </div>
                <div class="flex flex-col">
                    <h1 class="text-md font-bold">Full Finished</h1>
                    <h1 class="text-md font-bold">Sunken Living</h1>
                    <h1 class="text-md font-bold">Garden</h1>
                    <h1 class="text-md font-bold">Powder Room</h1>
                </div>
            </div>
    
            <div class="flex flex-wrap justify-between text-gray-400">
                <h1>2 Bedrooms</h1>
                <h1>2 Bathrooms</h1>
                <h1>Private Pool</h1>
                <h1>Carport</h1>
            </div>
        </div>
    
        <div class="order-1 md:order-2 flex md:block">
            <img 
                src="{{ asset('images/project-detail.png') }}" 
                class="object-cover w-full h-full" 
                alt="Project Detail">
        </div>
    </div>
    


<section class="flex flex-col py-12">    
      <div class="mt-12 w-full max-md:mt-10">
       
        <div class="gap-0 grid grid-cols-2 md:grid-cols-4 px-4 md:px-0">
  
            <!-- First Item -->
            <div class="flex flex-col grow items-start justify-between px-12 py-24 w-full bg-white border-t-2 border-l-2 border-b-2 border-solid border-zinc-400 max-md:px-5 max-md:py-20 max-md:max-w-full max-md:h-[calc(80vw)]">
              <p class="text-base tracking-wide font-[415] text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out self-start">ROADS</p>
              
              <div class="flex flex-col items-start grow justify-center w-full">
                <div class="text-2xl font-light text-gray-300 mb-4 lg:mb-0">
                  <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">7</span> Minutes</span>
                </div>
                <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To Bali Mandara Toll Road</h3>
              </div>
            </div>
            
            <!-- Second Item -->
            <div class="flex flex-col grow items-start justify-between px-12 py-24 w-full bg-white border-t-2 border-l-2 border-b-2 border-r-2 border-solid border-zinc-400 max-md:px-5 max-md:py-20 max-md:max-w-full md:border-r-0 max-md:h-[calc(80vw)]">
              <p class="text-base tracking-wide font-[415] text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out self-start">RELIGION</p>
              
              <div class="flex flex-col items-start grow justify-center w-full">
                <div class="text-3xl font-light text-gray-300 mb-4 lg:mb-0">
                  <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">8</span> Minutes</span>
                </div>
                <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To Puja Mandala Worship Complex</h3>
              </div>
            </div>
            
            <!-- Third Item -->
            <div class="flex flex-col grow items-start justify-center px-12 py-24 w-full bg-white border-t-2 border-l-2 border-b-2 border-solid border-zinc-400 max-md:px-5 max-md:py-20 max-md:max-w-full max-md:border-t-0 max-md:h-[calc(80vw)]">
              <p class="text-base tracking-wide font-[415] text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out self-start">HOTELS</p>
          
              <div class="flex flex-col items-start grow justify-center w-full">
                  <div class="text-3xl font-light text-gray-300 mb-4 lg:mb-0">
                      <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">15</span> Minutes</span>
                    </div>
                    <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To Apurva Kempinski</h3>
              </div>
            </div>
            
            <!-- Fourth Item (aligned with Third Item on Mobile) -->
            <div class="flex flex-col grow items-start justify-start px-12 py-24 w-full bg-white border-t-2 border-l-2 border-b-2 border-r-2 border-solid border-zinc-400 max-md:px-5 max-md:py-20 max-md:max-w-full max-md:border-t-0 max-md:h-[calc(80vw)]">
                <p class="text-base tracking-wide font-[415] text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out self-start">AIRPORTS</p>
          
                <div class="flex flex-col items-start justify-start w-full">
                    <div class="text-3xl font-light text-gray-300 mb-4 lg:mb-0">
                        <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">20</span> Minutes</span>
                    </div>
                    <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To Ngurah Rai Airport</h3>
                </div>
            </div>
          
          </div>
          
          
           
        
        
        
      </div>
    </section>

    @include('sections.about_us_image')

    <div class="grid grid-cols-1 md:grid-cols-2 px-8 md:px-24 py-24 gap-6">
        <div class="flex flex-col">
            <p class="text-sm text-gray-400">LOCATIONS</p>
            <h1 class="text-5xl">D'Land</h1>
            <h1 class="text-5xl font-century">Mumbul Villa</h1>
            <p class="text-gray-400 text-md py-6 w-[60%]">{{ $company->address }}</p>
            <a href="#" class="flex gap-1.5 items-center mt-4 sm:mt-7 font-[305] text-sm sm:text-base hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500">
                <span>Get Locations</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none" aria-hidden="true" class="mt-1">
                  <path d="M14.4375 5.5L9.5625 0.625M14.4375 5.5L9.5625 10.375M14.4375 5.5H0" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
        </div>
        <div class="flex flex-col w-full h-full">
            <img src="{{ asset('images/bali-map.png') }}" class="object-cover h-full w-full" alt="">
        </div>
    </div>
    


    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection