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
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
{{--        <header class="bg-white dark:bg-gray-800 shadow">--}}
{{--            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                {{ $header }}--}}
{{--            </div>--}}
{{--        </header>--}}
    @endif

    <!-- Page Content -->

    <main>
        <div class="flex mt-6 lg:ml-16 ml-8">
            @include('components.breadcrumb')
        </div>
        <section class="px-8">
            <div class="flex justify-center">
                <div class="col-span-1 lg:w-1/4 md:w-1/3 hidden lg:block md:block">@include('components.menu')</div>
                <div class="col-span-12 lg:w-3/4 md:w-2/4 sm:w-full">{{ $slot }}</div>
            </div>
            <br/>
            @include('components.footer')
            <br/>
        </section>
    </main>
</div>
</body>
</html>
