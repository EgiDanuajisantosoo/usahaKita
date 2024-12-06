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

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex justify-center items-center ">

       <div class="h-screen w-screen ">
        <img src={{asset("img/bg_Login3.jpg")}} class="w-screen h-screen"  alt="">

       </div>


        <div class="w-1/2 h-screen bg-white shadow-xl flex justify-center items-center">
            {{ $slot }}

        </div>
    </div>
</body>

</html>
