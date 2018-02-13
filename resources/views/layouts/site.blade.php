<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VHOM.ORG - kevin\'s projects') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto+Slab" rel="stylesheet">     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="left-menu">
        @include('layouts.site.nav')
    </div>
    <div class="page-content">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('javascript')
</body>
</html>
