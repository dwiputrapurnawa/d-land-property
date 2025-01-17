
@extends('layouts.main')

@section('title')
    D'Land Property - 404 Page Not Found
@endsection

@php
    $company = App\Models\Company::first();
@endphp

@section('content')

    <input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">

    @include('partials.navbar_black')

    @include('sections.error_404')

    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection