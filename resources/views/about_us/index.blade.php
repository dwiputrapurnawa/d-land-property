@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Learn about D'Land Properties, your trusted partner in Bali property and land acquisition. Contact us via WhatsApp or by number to explore prime real estate opportunities.">
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