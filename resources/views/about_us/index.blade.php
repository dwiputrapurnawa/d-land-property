@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Learn about D'Land Properties, your trusted partner in Bali property and land acquisition. Contact us via WhatsApp or by number to explore prime real estate opportunities.">
@endsection

@section('social-media-meta')
    <meta property="og:title" content="Discover D'Land Properties - Your Trusted Partner in Bali Real Estate">
    <meta property="og:description" content="Learn about D'Land Properties, your trusted partner in Bali property and land acquisition. Contact us via WhatsApp or by number to explore prime real estate opportunities.">
    <meta property="og:image" content="{{ asset('images/img-5.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
@endsection

@section('title')
    D'Land Property - {{ __('landing.navbar_about_us') }}
@endsection

@section('content')

<input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('partials.navbar_black')

    @include('sections.about_us_header')

    @include('sections.seamless_experience')

    @include('sections.about_us_image')

    @include('sections.core_values')

    @include('sections.our_team')
    
    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection