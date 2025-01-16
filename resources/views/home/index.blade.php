@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Discover premium Bali property with D'Land Properties. Find your ideal land or real estate at competitive prices. Contact us via WhatsApp for more info or to inquire by number.">
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