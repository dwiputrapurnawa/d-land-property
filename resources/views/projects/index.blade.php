@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Explore D'Land Properties’ latest projects in Bali, offering prime land and property opportunities. Contact us via WhatsApp or by number for more details on your next investment.">
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