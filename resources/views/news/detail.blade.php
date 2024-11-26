@extends('layouts.main')

@section('title')
    D'Land Property - News
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ $company->phone }}">

    @include('partials.navbar_black')

    <section class="w-full h-full py-24">

        <div class="px-8 md:px-24 py-24">
            <div class="flex flex-col w-full md:w-[68%] h-full">
                <h1 class="text-5xl md:text-6xl">D’Land Villa Mumbul Restore your spirit and soul with <span class="font-century italic">Modern Tropical Living </span></h1>
            </div>
    
            <div class="flex flex-wrap justify-between w-[280px] md:w-[258px] gap-5 py-6">
                <div class="flex flex-col">
                    <p>October 7, 2024</p>
                </div>
                <div class="flex flex-col">
                    <p>Press Release</p>
                </div>
            </div>
        </div>

        <img src="{{ asset('images/news-headline.png') }}" class="object-cover w-full h-full" alt="">


        <div class="w-full h-full px-8 md:px-32 py-24">
            <h1 class="text-3xl pb-6">D'Land Mumbul Villa: A Game-Changing Milestone for D'Land Property Nusa Dua, Bali – The Pinnacle of Luxury Living and Investment Awaits!</h1>
            <h4 class="text-2xl pb-4">Bali, Indonesia, October 7, 2024</h4>
            <p>D'Land Property is thrilled to announce the launch of its newest and most exclusive project yet – D'Land Mumbul Villa. Nestled in the prestigious and vibrant district of Nusa Dua, this luxury villa development promises to redefine the standard for tropical living in Bali. With only 12 exclusive units, D'Land Mumbul Villa offers an unparalleled living experience in one of Bali's most sought-after areas, making it a groundbreaking achievement for the D'Land Property brand. This exceptional project is a collaboration with Agung Uttara Land, a renowned developer with a proven track record of successful projects in Bali. Designed by a leading Balinese architect, D'Land Mumbul Villa combines modern tropical living with traditional Balinese elements. The villas are elegantly crafted with natural stone finishes and incorporate a seamless blend of nature and sophistication, offering the perfect sanctuary for those seeking tranquility and luxury in Bali.</p>
        </div>


        
    </section>


   <div class="px-8 py-12">
    <h class="text-5xl">Article you might be <span class="font-century italic">interested</span></h1>
   </div>

    @include('sections.news_list')
      
    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection