<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mémo-mélo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
        <script src="/path/to/alpine.js" defer></script>

    </head>
    <body >
        <div class="guest-blade">
            <div class="container">
                {{ $slot }}
            </div>
            <img src="{{ asset('assets/images/memo-melo-green.svg') }}"/>
        </div>
    </body>
</html>
