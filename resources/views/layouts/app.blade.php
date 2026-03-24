<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{ $settings['meta_description'] ?? 'Aral School — Interdisciplinary research programme in Central Asia' }}">
        <title>{{ $settings['site_title'] ?? 'Aral School' }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @stack('head')
    </head>
    <body>
        @yield('content')

        @stack('scripts')
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
