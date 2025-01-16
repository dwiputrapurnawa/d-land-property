@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Stay updated with the latest news on Bali property and land trends. Contact D'Land Properties via WhatsApp or by number for inquiries and expert guidance on real estate opportunities.">
@endsection

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