<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex/nofollow">
    <title>{{ SEOMeta::getTitle() }}</title>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <wireui:scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body id="app" class="font-sans antialiased  bg-gray-100 dark:bg-gray-900">
    <x-banner />

    <div class="flex flex-row relative" x-data="{ sidebar: false, mobile: false }" 
    x-init="width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
            sidebar = (width < 640) ? false : true;"
        @resize.window="width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                       sidebar = (width < 640) ? false : true">

        @livewire('dash.components.nav')
        @livewire('dash.components.sidebar')

        <div :class="{'ml-64': sidebar, 'ml-0': !sidebar}" class="min-h-screen p-4 w-full mt-14 transition-all duration-300 ease-in-out">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
    </div>

    @livewireScripts
</body>

</html>
