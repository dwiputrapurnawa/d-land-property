@extends('layouts.main')

@section('title')
    D'Land Property - {{ __('landing.navbar_news') }}
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('partials.navbar_black')

    @include('sections.news_headline')

    @include('sections.headline_news')

    @include('sections.news_list')
      
    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection