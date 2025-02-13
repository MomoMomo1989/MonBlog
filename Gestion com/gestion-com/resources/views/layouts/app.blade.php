<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
       
        @livewireStyles
    </head>
    <body class="font-sans antialiased w-100vw h-100vh flex flex-col ">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow " >
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 fixed top-0">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex  h-full w-full ">
                <x-menu--lateral />
                <div class="pt-[70px] pl-3 pr-3 w-[calc(100vw-256px)] max-h-screen overflow-y-auto">
                    {{ $slot }}
                </div>
                
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
