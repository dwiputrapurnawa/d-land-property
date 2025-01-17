@extends('layouts.main')

@section('meta-description')
<meta name="description" content="Meet the management team at D'Land Properties, your expert guide to Bali property and land. Contact us via WhatsApp for inquiries or more information by number.">
@endsection

@section('social-media-meta')
    <meta property="og:title" content="Meet the Management Team at D'Land Properties - Your Expert Guide to Bali Real Estate">
    <meta property="og:description" content="Meet the management team at D'Land Properties, your expert guide to Bali property and land. Contact us via WhatsApp for inquiries or more information by number.">
    <meta property="og:image" content="{{ asset('images/management-hero.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
@endsection

@section('title')
    D'Land Property - {{ __('landing.navbar_managements') }}
@endsection

@section('content')

<input type="hidden" name="company_number" value="{{ str_replace([' ', '-'], '', $company->phone) }}">


  @include('sections.management_headline')

  @include('sections.make_your_investment')
  
  @include('sections.ensuring_your_property')

  @include('sections.our_success_is_yours')
  
  @include('sections.contact_us')

  @include('sections.footer')

  @include('modal.whatsapp_overlay')

  @include('modal.request_call_overlay')

@endsection