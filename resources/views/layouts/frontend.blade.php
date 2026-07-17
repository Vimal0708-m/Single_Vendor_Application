<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'BloomShop'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/css/frontend.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="font-sans antialiased flex flex-col min-h-screen" style="background-color: var(--bloom-background); color: var(--bloom-foreground);">
    @include('frontend.partials.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
    @stack('scripts')
</body>
</html>
