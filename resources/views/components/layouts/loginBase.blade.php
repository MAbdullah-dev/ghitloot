<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'Page Title')</title>
</head>
<body>
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
    @stack('js')
</body>

</html>
