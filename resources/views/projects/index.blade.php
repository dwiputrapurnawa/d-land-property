@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Explore D'Land Properties’ latest projects in Bali, offering prime land and property opportunities. Contact us via WhatsApp or by number for more details on your next investment.">
@endsection

@section('social-media-meta')
    <meta property="og:title" content="Explore D'Land Properties’ Latest Projects in Bali - Prime Land & Property Opportunities">
    <meta property="og:description" content="Explore D'Land Properties’ latest projects in Bali, offering prime land and property opportunities. Contact us via WhatsApp or by number for more details on your next investment.">
    <meta property="og:image" content="{{ asset('images/hero.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Explore D'Land Properties’ Latest Projects in Bali - Prime Land & Property Opportunities">
    <meta name="twitter:description" content="Explore D'Land Properties’ latest projects in Bali, offering prime land and property opportunities. Contact us via WhatsApp or by number for more details on your next investment.">
    <meta name="twitter:image" content="{{ asset('images/hero.webp') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">

@endsection

@section('title')
    D'Land Property - {{ __('landing.navbar_project') }}
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('partials.navbar_black')

    @include('sections.projects')

    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection