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
</head>

<body class="font-sans antialiased">
    <div
        class="min-h-screen bg-gray-100 dark:bg-gradient-to-b dark:from-gray-950 dark:via-black dark:to-gray-900 text-gray-900 dark:text-gray-100">

        {{-- Navigation --}}
        @include('layouts.navigation')

        {{-- Page Heading --}}
        @isset($header)
            <header class="border-b border-gray-200 dark:border-gray-800 bg-white/90 dark:bg-gray-900/60 backdrop-blur">
                <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                    <h2 class="text-xl font-semibold tracking-tight">
                        {{ $header }}
                    </h2>
                </div>
            </header>
        @endisset

        {{-- Page Content --}}
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div
                class="bg-white dark:bg-gray-900/40 backdrop-blur rounded-xl shadow-lg p-6 border border-gray-200 dark:border-gray-800">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
