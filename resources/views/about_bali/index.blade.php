@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Explore Bali’s premier property market with D'Land Properties. Learn about the best land and real estate opportunities, and contact us via WhatsApp or by number for more information.">
@endsection

@section('social-media-meta')
    <meta property="og:title" content="Explore Bali’s Premier Property Market with D'Land Properties">
    <meta property="og:description" content="Explore Bali’s premier property market with D'Land Properties. Learn about the best land and real estate opportunities, and contact us via WhatsApp or by number for more information.">
    <meta property="og:image" content="{{ asset('images/bali-tourism-cover.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Explore Bali’s Premier Property Market with D'Land Properties">
    <meta name="twitter:description" content="Explore Bali’s premier property market with D'Land Properties. Learn about the best land and real estate opportunities, and contact us via WhatsApp or by number for more information.">
    <meta name="twitter:image" content="{{ asset('images/bali-tourism-cover.webp') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">

@endsection

@section('title')
    D'Land Property - {{ __('landing.navbar_about_bali') }}
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('partials.navbar_black')

    @include('sections.about_bali_headline')
      
    @include('sections.awards')

    @include('sections.benefits')

    @include('sections.bali_tourism')

    @include('sections.bali_tourism_places')
 
    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection