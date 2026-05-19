<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased min-h-screen bg-gray-50 dark:bg-zinc-900">
        <x-banner />

        <div class="lg:flex min-h-screen w-full">
            @include('navigation-menu')

            <div class="flex-1 w-full">
                <flux:main>
                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white dark:bg-zinc-800 shadow rounded-lg mb-6">
                            <div class="px-4 py-6 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </flux:main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
        @fluxScripts
    </body>
</html>
