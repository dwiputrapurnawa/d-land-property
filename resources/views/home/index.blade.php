@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Discover premium Bali property with D'Land Properties. Find your ideal land or real estate at competitive prices. Contact us via WhatsApp for more info or to inquire by number.">
@endsection

@section('social-media-meta')
    <meta property="og:title" content="D'Land Properties - Premium Real Estate in Bali">
    <meta property="og:description" content="Discover premium real estate in Bali with D'Land Properties, offering competitive pricing and a seamless property search experience.">
    <meta property="og:image" content="{{ asset('images/hero.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="D'Land Properties - Premium Real Estate in Bali">
    <meta name="twitter:description" content="Discover premium real estate in Bali with D'Land Properties, offering competitive pricing and a seamless property search experience.">
    <meta name="twitter:image" content="{{ asset('images/hero.webp') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">

@endsection

@section('title')
    D'Land Property - {{ __('landing.navbar_home') }}
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('sections.headline')

    @include('sections.about_us')

    @include('sections.about_bali')

    @include('sections.project_showcase')
    
    @include('sections.projects')

    @include('sections.contact_us')

    @include('sections.social')

    @include('sections.image')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection