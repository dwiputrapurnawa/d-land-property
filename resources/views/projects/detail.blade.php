@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Discover the details of D'Land Properties' latest Bali property projects. Explore prime land opportunities and contact us via WhatsApp or by number for more information on your next investment.">
@endsection

@section('title')
    D'Land Property - {{ $project->project_name }}
@endsection

@section('content')

    @php
        use Illuminate\Support\Str;

        $query = urlencode($project->project_name . ', ' . $project->address);
        $mapLink = "https://www.google.com/maps/search/?api=1&query={$query}";
    @endphp

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    <div class="relative h-screen">
        <img src="{{ asset("storage/" . $project->image) }}" class="w-full h-full absolute inset-0 object-cover" alt="">
    
        @include('partials.navbar_white')
    
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-5xl md:text-6xl text-white text-center animated-element opacity-0 transition duration-300 ease-in-out">D'Land</h1>
            <h1 class="text-6xl md:text-7xl text-white text-center font-century uppercase animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->project_name }}</h1>
        
            <p class="text-white absolute bottom-5 text-center animated-element opacity-0 transition duration-300 ease-in-out">BALI, INDONESIA</p>
        </div>
        
        
    </div>
    
    <div class="w-full h-full pb-24">
        <div class="flex flex-col px-8 md:px-24 py-24 items-start">
            <p class="text-sm text-gray-400 animated-element opacity-0 transition duration-300 ease-in-out uppercase">{{ $project->property_type }}</p>
            <h1 class="text-6xl pb-12 animated-element opacity-0 transition duration-300 ease-in-out capitalize-text">D'Land <br><span class="font-century animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->project_name }}</span></h1>
            <p class="text-gray-400 w-[300px] animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->address }}</p>
        </div>
    
        <div class="flex flex-col px-auto md:px-12">
            <img src="{{ asset('images/project-detail.gif') }}" class="object-cover w-full h-full" alt="">
        </div>

        <div class="grid grid-cols-1  md:grid-cols-2 px-12 py-28">
            <div class="flex flex-col items-center">
                <img
                loading="lazy"
                src="/images/logo-substract.webp"
                alt="About D'Land Properties"
                class="object-contain w-full max-w-[200px] sm:max-w-[200px] md:max-w-[200px] aspect-[0.83] mx-auto md:mx-0 hidden sm:block animated-element opacity-0 transition duration-300 ease-in-out"
            >
            </div>

            <div class="flex flex-col">
                <h1 class="text-3xl animated-element opacity-0 transition duration-300 ease-in-out">{!! $project->description !!}</h1>
                <div class="grid grid-cols-2 md:grid-cols-5 py-12 md:py-6 gap-5">
                    <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                        <h1 class="text-lg md:text-md font-bold">Price From</h1>
                        <p class="text-xl md:text-lg text-gray-400">Start From IDR {{ $project->price_from }}</p>
                    </div>
                    <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                        <h1 class="text-lg md:text-md font-bold">Location</h1>
                        <p class="text-xl md:text-lg text-gray-400 lowercase capitalize">{{ $project->location }}</p>
                    </div>
                    <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                        <h1 class="text-lg md:text-md font-bold">Capital Gain</h1>
                        <p class="text-xl md:text-lg text-gray-400">{{ $project->capital_gain }}%</p>
                    </div>
                    <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                        <h1 class="text-lg md:text-md font-bold">Quantity</h1>
                        <p class="text-xl md:text-lg text-gray-400">{{ $project->quantity }} {{ Str::plural($project->property_type, $project->quantity) }}</p>
                    </div>
                    <div class="flex flex-col items-center justify-center hidden md:block animated-element opacity-0 transition duration-300 ease-in-out">
                        <a href="https://wa.me/{{ str_replace([' ', '-'], '', $company->phone) }}" class="border border-black w-auto flex items-center justify-center rounded px-4 py-2" target="_blank">BOOK NOW</a>
                    </div>
                </div>
                
                
                
            </div>
        </div>

        <img src="{{ asset('images/img-detail.webp') }}" class="w-full h-full object-cover" alt="">
    </div>

    @include('sections.project_showcase')

    <div class="grid grid-cols-1 md:grid-cols-2 py-24 md:px-28 px-8 gap-y-6">
        <!-- Reverse order on mobile screens -->
        <div class="order-2 md:order-1 flex flex-col px-6 md:px-24 mt-auto">
            <p class="text-sm text-gray-400 pb-4 animated-element opacity-0 transition duration-300 ease-in-out">UNIT TYPES</p>
            <h1 class="text-5xl animated-element opacity-0 transition duration-300 ease-in-out">D'Land</h1>
            <h1 class="text-5xl animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->project_name }}</h1>
    
            <div class="grid grid-cols-2 py-12 gap-12">
                <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                    <h1 class="text-md font-bold">Area:</h1>
                    <p class="text-gray-400">Start from {{ $project->area }}m<sup>2</sup></p>
                </div>
                <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                    <h1 class="text-md font-bold">Building Area:</h1>
                    <p class="text-gray-400">{{ $project->building_area }}m<sup>2</sup></p>
                </div>
    
                <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                 
                    @foreach ($firstHalfAmenities as $item)
                    <h1 class="text-md font-bold">{{ $item }}</h1>
                    @endforeach
                </div>
                <div class="flex flex-col animated-element opacity-0 transition duration-300 ease-in-out">
                    @foreach ($secondHalfAmenities as $item)
                    <h1 class="text-md font-bold">{{ $item }}</h1>
                    @endforeach
                </div>
            </div>
    
            <div class="flex flex-wrap justify-between text-gray-400 animated-element opacity-0 transition duration-300 ease-in-out">
                <h1>{{ $project->bedrooms }} Bedrooms</h1>
                <h1>{{ $project->bathrooms }} Bathrooms</h1>
                <h1>{{ $project->private_pool ? "Private Pool" : "" }}</h1>
                <h1>{{ $project->carport ? "Carport" : "" }}</h1>
            </div>
        </div>
    
        <div class="order-1 md:order-2 flex md:block">
            <img 
                src="{{ asset("storage/" . $project->get_images->first()->image_path) }}" 
                class="object-cover w-full h-full animated-element opacity-0 transition duration-300 ease-in-out" 
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
                  <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">{{ $project->roads_time }}</span> Minutes</span>
                </div>
                <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To {{ $project->roads_to }}</h3>
              </div>
            </div>
            
            <!-- Second Item -->
            <div class="flex flex-col grow items-start justify-between px-12 py-24 w-full bg-white border-t-2 border-l-2 border-b-2 border-r-2 border-solid border-zinc-400 max-md:px-5 max-md:py-20 max-md:max-w-full md:border-r-0 max-md:h-[calc(80vw)]">
              <p class="text-base tracking-wide font-[415] text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out self-start">RELIGION</p>
              
              <div class="flex flex-col items-start grow justify-center w-full">
                <div class="text-3xl font-light text-gray-300 mb-4 lg:mb-0">
                  <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">{{ $project->religion_time }}</span> Minutes</span>
                </div>
                <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To {{ $project->religion_to }}</h3>
              </div>
            </div>
            
            <!-- Third Item -->
            <div class="flex flex-col grow items-start justify-center px-12 py-24 w-full bg-white border-t-2 border-l-2 border-b-2 border-solid border-zinc-400 max-md:px-5 max-md:py-20 max-md:max-w-full max-md:border-t-0 max-md:h-[calc(80vw)]">
              <p class="text-base tracking-wide font-[415] text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out self-start">HOTELS</p>
          
              <div class="flex flex-col items-start grow justify-center w-full">
                  <div class="text-3xl font-light text-gray-300 mb-4 lg:mb-0">
                      <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">{{ $project->hotels_time }}</span> Minutes</span>
                    </div>
                    <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To {{ $project->hotels_to }}</h3>
              </div>
            </div>
            
            <!-- Fourth Item (aligned with Third Item on Mobile) -->
            <div class="flex flex-col grow items-start justify-start px-12 py-24 w-full bg-white border-t-2 border-l-2 border-b-2 border-r-2 border-solid border-zinc-400 max-md:px-5 max-md:py-20 max-md:max-w-full max-md:border-t-0 max-md:h-[calc(80vw)]">
                <p class="text-base tracking-wide font-[415] text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out self-start">AIRPORTS</p>
          
                <div class="flex flex-col items-start justify-start w-full">
                    <div class="text-3xl font-light text-gray-300 mb-4 lg:mb-0">
                        <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"><span class="text-7xl">{{ $project->airports_time }}</span> Minutes</span>
                    </div>
                    <h3 class="mt-8 text-xl tracking-wider leading-none animated-element opacity-0 transition duration-300 ease-in-out">To {{ $project->airports_to }}</h3>
                </div>
            </div>
          
          </div>
          
          
           
        
        
        
      </div>
    </section>


    <div class="w-full h-full">
        <section class="flex flex-col p-20 max-md:hidden">
            <div class="w-full max-md:max-w-full">
                <div class="flex gap-8 max-md:flex-col">
                    <article class="flex flex-col w-[35%] max-md:ml-0 max-md:w-full">
                        @if(isset($project->get_images[0]))
                            <img
                                loading="lazy"
                                src="{{ asset("storage/" . $project->get_images[0]->image_path) }}"
                                alt="Gallery image 1"
                                class="object-cover grow w-full aspect-[1.04] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                            />
                        @endif
                    </article>
                    
                    <article class="flex flex-col ml-8 w-[65%] max-md:ml-0 max-md:w-full">
                        @if(isset($project->get_images[1]))
                            <img
                                loading="lazy"
                                src="{{ asset("storage/" . $project->get_images[1]->image_path) }}"
                                alt="Gallery image 2"
                                class="object-cover grow w-full aspect-[1.92] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                            />
                        @endif
                    </article>
                    
                </div>
            </div>
            <div class="mt-8 w-full max-md:max-w-full">
                <div class="flex gap-8 max-md:flex-col">
                    <article class="flex flex-col w-[65%] max-md:ml-0 max-md:w-full">
                        @if(isset($project->get_images[2]))
                            <img
                                loading="lazy"
                                src="{{ asset("storage/" . $project->get_images[2]->image_path) }}"
                                alt="Gallery image 3"
                                class="object-cover grow w-full aspect-[1.92] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                            />
                        @endif
                    </article>
                    
                    <article class="flex flex-col ml-8 w-[35%] max-md:ml-0 max-md:w-full">
                        @if(isset($project->get_images[3]))
                            <img
                                loading="lazy"
                                src="{{ asset("storage/" . $project->get_images[3]->image_path) }}"
                                alt="Gallery image 4"
                                class="object-cover grow w-full aspect-[1.05] max-md:mt-6 max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                            />
                        @endif
                    </article>
                    
                </div>
            </div>
            @if(isset($project->get_images[4]))
                <img
                    loading="lazy"
                    src="{{ asset("storage/" . $project->get_images[4]->image_path) }}"
                    alt="Gallery image 5"
                    class="object-cover mt-8 w-full aspect-[1.79] max-md:max-w-full animated-element opacity-0 transition duration-300 ease-in-out"
                />
            @endif

        </section>
        
        
        
        <section class="flex flex-col mx-auto w-full max-w-[480px] px-6 md:hidden">
            <div class="flex gap-3 w-full">
                @if (isset($project->get_images[0]))
                <img loading="lazy" src="{{ asset("storage/" . $project->get_images[0]->image_path) }}" alt="Gallery image 1" class="object-cover shrink-0 max-w-full aspect-[1.04] w-[182px]" />
                @endif
                @if (isset($project->get_images[1]))
                <img loading="lazy" src="{{ asset("storage/" . $project->get_images[1]->image_path) }}" alt="Gallery image 2" class="object-cover shrink-0 max-w-full aspect-[1.04] w-[182px] ml-auto" />
                @endif
            </div>
            @if (isset($project->get_images[2]))
                <img loading="lazy" src="{{ asset("storage/" . $project->get_images[2]->image_path) }}" alt="Gallery image 3" class="object-cover mt-3 w-full aspect-[1.95]" />
            @endif
            @if (isset($project->get_images[3]))
                <img loading="lazy" src="{{ asset("storage/" . $project->get_images[3]->image_path) }}" alt="Gallery image 4" class="object-cover mt-3 w-full aspect-[1.9]" />
            @endif
            @if (isset($project->get_images[4]))
            <img loading="lazy" src="{{ asset("storage/" . $project->get_images[4]->image_path) }}" alt="Gallery image 5" class="object-cover mt-3 w-full aspect-[1.78]" />
            @endif
        </section>
    </div>
    


    <div class="grid grid-cols-1 md:grid-cols-2 px-8 md:px-24 py-24 gap-6">
        <div class="flex flex-col">
            <p class="text-sm text-gray-400 animated-element opacity-0 transition duration-300 ease-in-out">LOCATIONS</p>
            <h1 class="text-5xl animated-element opacity-0 transition duration-300 ease-in-out">D'Land</h1>
            <h1 class="text-5xl font-century animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->project_name }}</h1>
            <p class="text-gray-400 text-md py-6 w-[60%] animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->address }}</p>
            <a href="{{ $mapLink }}" class="flex gap-1.5 items-center mt-4 sm:mt-7 font-[305] text-sm sm:text-base hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500 animated-element opacity-0 transition duration-300 ease-in-out" target="_blank">
                <span>Get Locations</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none" aria-hidden="true" class="mt-1">
                  <path d="M14.4375 5.5L9.5625 0.625M14.4375 5.5L9.5625 10.375M14.4375 5.5H0" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
        </div>
        <div class="flex flex-col w-full h-full">
            <img src="{{ asset('images/bali-map.webp') }}" class="object-cover h-full w-full animated-element opacity-0 transition duration-300 ease-in-out" alt="">
        </div>
    </div>
    


    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection