@extends('layouts.main')

@section('title')
    D'Land Property - Management
@endsection

@section('content')

<input type="hidden" name="company_number" value="{{ $company->phone }}">


    <section class="flex flex-col relative">
    
         <img src="{{ asset('images/management-hero.png') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover z-0">
     
    
         @include('partials.navbar_white')    
           
         <section class="flex text-white relative flex-col items-start px-16 py-14 max-w-full bg-white bg-opacity-10 mt-[549px] w-[648px] max-md:px-5 max-md:mt-10 bottom-20 backdrop-blur-sm">
            <h1 class="text-6xl font-medium leading-[60px] max-md:max-w-full max-md:text-4xl max-md:leading-10">
              <span class="font-[405]">D'Land Property</span>
              <br />
              Service <span class="font-[405]">And</span>
              <br />
              Management
            </h1>
            <p class="mt-10 text-base font-light leading-5 w-[381px]">
              Each of our projects is supported by a dedicated management company, ensuring your property is meticulously maintained and all administrative tasks are expertly handled
            </p>
          </section>
           
     
    
         
     </section>

     <section class="container mx-auto px-4 py-16">
      <div class="flex flex-wrap -mx-4 py-32 pl-20 pr-16">
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <header>
            <h2 class="text-base font-light text-zinc-400 uppercase mb-4">Services</h2>
            <h1 class="text-4xl md:text-6xl font-normal leading-tight text-zinc-800">
              Make your <br /> Investment <br> <span class="italic font-century tracking-tighter">A Success</span>
            </h1>
          </header>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <article class="mb-16">
            <h3 class="text-2xl font-normal tracking-wide text-zinc-800 mb-6">Services 01</h3>
            <p class="text-xl tracking-wide leading-relaxed text-zinc-700">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
            </p>
          </article>
          <article>
            <h3 class="text-2xl font-normal tracking-wide text-zinc-800 mb-6">Services 03</h3>
            <p class="text-xl tracking-wide leading-relaxed text-zinc-700">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
          </article>
        </div>
        <div class="w-full md:w-1/3 px-4">
          <article class="mb-16">
            <h3 class="text-2xl font-normal tracking-wide text-zinc-800 mb-6">Services 02</h3>
            <p class="text-xl tracking-wide leading-relaxed text-zinc-700">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
          </article>
          <article>
            <h3 class="text-2xl font-normal tracking-wide text-zinc-800 mb-6">Services 04</h3>
            <p class="text-xl tracking-wide leading-relaxed text-zinc-700">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </article>
        </div>
      </div>
    </section>

    <section class="container mx-auto flex gap-16 max-md:flex-col p-8">
      <div class="flex flex-col w-[29%] max-md:ml-0 max-md:w-full">
          <div class="flex flex-col text-zinc-800 max-md:mt-10">
              <h2 class="self-start text-base font-light text-zinc-400 uppercase">Our Capability</h2>
              <h3 class="mt-6 text-6xl font-normal leading-[64px] max-md:mr-1 max-md:text-4xl max-md:leading-10">
                  Ensuring <br> your property <br> <span class="italic font-century">Maintained</span>
              </h3>
              <p class="mt-36 text-xl tracking-wider leading-9 max-md:mt-10">
                  We ensure your Property is immaculately maintained, even while you unwind, allowing you to fully experience the joys of genuine comfort.
              </p>
          </div>
      </div>
      <div class="flex flex-col ml-5 w-full max-md:ml-0 max-md:w-full">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0e67ccb4b05a8569d1fa74ded3ed78bbbb5cb5b9120167d97b0ee537f5764dec?placeholderIfAbsent=true&apiKey=d2a041474570455ea3b193ed2249e743" class="object-contain grow w-full aspect-[1.06] max-md:mt-10 max-md:max-w-full" alt="Property maintenance illustration">
      </div>
  </section>


  <section class="flex flex-col py-32">
    <header class="flex flex-wrap gap-4 items-center self-center max-w-full text-6xl leading-none font-[405] text-zinc-800 w-[556px] max-md:text-4xl">
      <h2 class="self-stretch my-auto max-md:text-4xl">Our <span class="grow shrink self-stretch font-medium leading-none w-[195px] max-md:text-4xl font-century tracking-tighter">Success </span>is Yours
      </h2>

    </header>
    <div class="mt-12 w-full max-md:mt-10 max-md:max-w-full">
      <div class="flex gap-0 max-md:flex-col">
        <article class="flex flex-col w-1/4 max-md:ml-0 max-md:w-full">
          <div class="flex flex-col grow items-start px-12 py-44 w-full bg-white border-t-2 border-l-2 border-b-2 border-solid border-zinc-400 max-md:px-5 max-md:py-24 max-md:max-w-full">
            <p class="text-base tracking-wide font-[415] text-zinc-400">UP TO</p>
            <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
              <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out">10%</span>
          </div>
            <h3 class="mt-8 text-xl tracking-wider leading-none">Capital Gain</h3>
          </div>
        </article>
        <article class="flex flex-col w-1/4 max-md:ml-0 max-md:w-full">
          <div class="flex flex-col grow items-start px-12 py-44 w-full bg-white border-t-2 border-l-2 border-b-2 border-solid border-zinc-400 max-md:px-5 max-md:py-24 max-md:max-w-full">
            <p class="text-base tracking-wide font-[415] text-zinc-400">ROI</p>
            <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
              <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out">13%</span>
          </div>
            <h3 class="mt-8 text-xl tracking-wider leading-none">Rental Cash Flow</h3>
          </div>
        </article>
        <article class="flex flex-col w-1/4 max-md:ml-0 max-md:w-full">
          <div class="flex flex-col grow items-start px-12 py-44 w-full bg-white border-t-2 border-l-2 border-b-2 border-solid border-zinc-400 max-md:px-5 max-md:py-24 max-md:max-w-full">
            <br>
            <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
              <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out">70%</span>
          </div>
            <h3 class="mt-8 text-xl tracking-wider leading-none">Occupancy Rate</h3>
          </div>
        </article>
        <article class="flex flex-col w-1/4 max-md:ml-0 max-md:w-full">
          <div class="flex flex-col grow items-start px-12 py-44 w-full bg-white border-t-2 border-l-2 border-b-2 border-solid border-zinc-400 max-md:px-5 max-md:py-24 max-md:max-w-full">
            <div class="text-4xl lg:text-8xl font-light text-gray-300 mb-4 lg:mb-0">
              <span class="inset-0 text-transparent text-white -z-10 outline-layer-sans animated-element opacity-0 transition duration-300 ease-in-out"> IDR <br /> 2.2B</span>
          </div>
          </div>
        </article>
      </div>
    </div>
  </section>
  
  
  
    
    @include('sections.contact_us')

    <hr class="bg-white w-full">

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection