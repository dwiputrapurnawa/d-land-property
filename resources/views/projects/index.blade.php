@extends('layouts.main')

@section('title')
    D'Land Property - Projects
@endsection

@section('content')

    <input type="hidden" name="company_number" value="{{ $company->phone }}">

    @include('partials.navbar_black')

    @include('sections.projects')

    @include('sections.contact_us')

    @include('sections.footer')

    @include('modal.whatsapp_overlay')

    @include('modal.request_call_overlay')

@endsection