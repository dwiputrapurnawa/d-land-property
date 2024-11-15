<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<script>
    // Define locale from Laravel's app locale
    const locale = "{{ app()->getLocale() }}";
</script>
<body class="font-sans">

    @yield('content')



    @include('partials.whatsapp_floating_button')

    <script src="/js/master.js"></script>
</body>
</html>