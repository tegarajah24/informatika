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

        <!-- wire:navigate progress bar custom style -->
        <style>
            /* NProgress bar - used by wire:navigate transitions */
            #nprogress .bar {
                background: #3b82f6 !important;
                height: 3px !important;
                box-shadow: 0 0 8px #3b82f6;
            }
            #nprogress .peg {
                box-shadow: 0 0 10px #3b82f6, 0 0 5px #93c5fd !important;
            }
            #nprogress .spinner { display: none !important; }

            /* Page-transition spinner overlay */
            #page-transition-overlay {
                pointer-events: none;
                transition: opacity 0.2s ease;
            }

            @keyframes spin {
                to { transform: rotate(360deg); }
            }
            .page-spinner {
                animation: spin 0.8s linear infinite;
            }
        </style>
    </head>
    <body class="font-sans antialiased min-h-screen bg-gray-50 dark:bg-zinc-900">
        <!-- Global Livewire network loading bar -->
        <div
            wire:loading.delay
            wire:loading.class.remove="opacity-0"
            class="opacity-0 fixed top-0 left-0 right-0 z-[9999] h-[3px] bg-gradient-to-r from-blue-400 via-blue-600 to-indigo-500 transition-opacity duration-300 shadow-[0_0_8px_rgba(59,130,246,0.8)]"
        ></div>

        <!-- Page-transition spinner overlay (wire:navigate only) -->
        <div
            id="page-transition-overlay"
            class="fixed inset-0 z-[9998] flex items-center justify-center bg-white/60 dark:bg-zinc-900/60 backdrop-blur-sm opacity-0"
            style="display: none;"
        >
            <div class="flex flex-col items-center gap-4">
                <!-- Outer ring -->
                <div class="relative w-16 h-16">
                    <div class="absolute inset-0 rounded-full border-4 border-blue-100 dark:border-zinc-700"></div>
                    <svg class="page-spinner absolute inset-0 w-16 h-16" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="28" stroke="#3b82f6" stroke-width="4" stroke-linecap="round"
                            stroke-dasharray="120" stroke-dashoffset="60"
                        />
                    </svg>
                </div>
                <p class="text-sm font-semibold text-blue-600 dark:text-blue-400 tracking-wide">Memuat halaman...</p>
            </div>
        </div>

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

        <script>
            // Show/hide page-transition overlay on wire:navigate events
            const overlay = document.getElementById('page-transition-overlay');

            function showOverlay() {
                overlay.style.display = 'flex';
                // Small delay so display kicks in before opacity transition
                requestAnimationFrame(() => {
                    requestAnimationFrame(() => { overlay.style.opacity = '1'; });
                });
            }

            function hideOverlay() {
                overlay.style.opacity = '0';
                setTimeout(() => { overlay.style.display = 'none'; }, 250);
            }

            document.addEventListener('livewire:navigate',    showOverlay);
            document.addEventListener('livewire:navigating',  showOverlay);
            document.addEventListener('livewire:navigated',   hideOverlay);
        </script>
    </body>
</html>
