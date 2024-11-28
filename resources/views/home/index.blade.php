@extends('layouts.main')

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