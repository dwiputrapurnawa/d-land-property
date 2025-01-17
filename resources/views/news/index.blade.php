@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Stay updated with the latest news on Bali property and land trends. Contact D'Land Properties via WhatsApp or by number for inquiries and expert guidance on real estate opportunities.">
@endsection

@section('social-media-meta')
    <meta property="og:title" content="Stay Updated with the Latest Bali Property Trends | D'Land Properties">
    <meta property="og:description" content="Stay updated with the latest news on Bali property and land trends. Contact D'Land Properties via WhatsApp or by number for inquiries and expert guidance on real estate opportunities.">
    <meta property="og:image" content="{{ asset('images/news-1.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Stay Updated with the Latest Bali Property Trends | D'Land Properties">
    <meta name="twitter:description" content="Stay updated with the latest news on Bali property and land trends. Contact D'Land Properties via WhatsApp or by number for inquiries and expert guidance on real estate opportunities.">
    <meta name="twitter:image" content="{{ asset('images/news-1.webp') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">

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