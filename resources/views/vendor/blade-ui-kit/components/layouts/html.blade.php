<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title() }}</title>

    {{ $head ?? '' }}

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body {{ $attributes }} class="font-montserrat text-xl text-white h-full">

<div class="fixed top-4 right-4 alert transition duration-300">
    <x-alert type="success" class="bg-green-700 text-base text-green-100 p-4 rounded-full" />
    <x-alert type="warning" class="bg-yellow-700 text-base text-yellow-100 p-4 rounded-full" />
    <x-alert type="danger" class="bg-red-700 text-base text-red-100 p-4 rounded-full" />
</div>

<div class="flex flex-col min-h-full">
    {{ $slot }}
</div>

</body>
</html>
