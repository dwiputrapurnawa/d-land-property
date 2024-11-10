@extends('layouts.main')

@section('title')
    D'Land Property - Home
@endsection

@section('content')

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

@endsection