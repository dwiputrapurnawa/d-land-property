@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Read the latest updates on Bali property and land opportunities. For more details, contact D'Land Properties via WhatsApp or by number and get expert advice on your real estate journey.">
@endsection


@section('title')
    D'Land Property - {{ $news->title }}
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('partials.navbar_black')

    <section class="w-full h-full py-24">

        <div class="px-8 md:px-24 py-24">
            <div class="flex flex-col w-full md:w-[68%] h-full">
                <h1 class="text-5xl md:text-6xl animated-element opacity-0 transition duration-300 ease-in-out">{{ $news->title }}</h1>
            </div>
    
            <div class="flex flex-wrap justify-between  md:w-[300px] gap-5 py-6 animated-element opacity-0 transition duration-300 ease-in-out">
                <div class="flex flex-col">
                    <p>{{ \Carbon\Carbon::parse($news->created_at)->format('F j, Y') }}</p>
                </div>
                <div class="flex flex-col">
                    <p>{{ __('landing.press_release') }}</p>
                </div>
            </div>
        </div>

        <img src="{{ asset("storage/" . $news->image) }}" class="object-cover w-full h-full animated-element opacity-0 transition duration-300 ease-in-out" alt="">


        <div class="w-full h-full px-8 md:px-32 py-24 animated-element opacity-0 transition duration-300 ease-in-out">
            {!! $news->content !!}
        </div>


        
    </section>


   <div class="px-8 py-12 animated-element opacity-0 transition duration-300 ease-in-out">
    <h class="text-5xl">{{ __('landing.article_you_might_interested_text_1') }} <span class="font-century italic">{{ __('landing.article_you_might_interested_text_2') }}</span></h1>
   </div>

    @include('sections.news_list')
      
    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection