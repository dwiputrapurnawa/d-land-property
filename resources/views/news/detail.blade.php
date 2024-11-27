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
                <h1 class="text-5xl md:text-6xl">{{ $news->title }}</h1>
            </div>
    
            <div class="flex flex-wrap justify-between  md:w-[300px] gap-5 py-6">
                <div class="flex flex-col">
                    <p>{{ \Carbon\Carbon::parse($news->created_at)->format('F j, Y') }}</p>
                </div>
                <div class="flex flex-col">
                    <p>Press Release</p>
                </div>
            </div>
        </div>

        <img src="/{{ $news->image }}" class="object-cover w-full h-full" alt="">


        <div class="w-full h-full px-8 md:px-32 py-24">
            {!! $news->content !!}
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