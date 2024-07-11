<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="all">
    {!! SEO::generate(true) !!}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=alexandria:100,200,300,400,500,700,800,900" rel="stylesheet" />

    <!--Wireui Scripts -->
    <wireui:scripts />
    <!--Wireui Scripts End -->

    <!-- Styles -->
    @filamentStyles
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body id="app" class="font-sans antialiased bg-gray-100">
@livewire('guest.components.top-header')
@livewire('guest.components.nav')


<!-- Notifications -->
<x-notifications position="top-right" z-index="z-50" />
<!-- Notifications End -->

<!-- Page Content -->
<main>
    {{ $slot }}
</main>


@livewire('notifications')
@stack('modals')


@filamentScripts
@vite('resources/js/app.js')
@livewireScripts
@stack('scripts')
</body>

</html>
