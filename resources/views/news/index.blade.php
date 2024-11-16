@extends('layouts.main')

@section('title')
    D'Land Property - News
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ $company->phone }}">

    @include('partials.navbar_black')

    @include('sections.news_headline');

    @include('sections.headline_news');

    @include('sections.news_list');
      
    @include('sections.contact_us')

    <hr class="bg-white w-full">

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection