<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MRI</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet"> --}}
        <!-- Styles -->


        <style>
        </style>
    </head>
    <body class="overflow-x-hidden">
    @include('partials.nav')
    @yield('content')

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.js')}}"></script>
    <script src="https://kit.fontawesome.com/0ad26a02a1.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
    