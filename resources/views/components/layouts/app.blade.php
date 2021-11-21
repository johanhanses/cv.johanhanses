<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>cv.johanhanses.com</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-poppins min-h-screen h-full">
    <div class="flex flex-col lg:flex-row lg:min-h-screen">
        <x-layouts.nav class="w-full lg:w-1/4"/>

        <main class="w-full lg:w-3/4 pt-12 px-6 lg:px-12 text-sm lg:text-base md:text-lg">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
