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
        <style>
            body {
                margin: 0;
                overflow: hidden; 
            }
            .background {
                background: linear-gradient(135deg, #2a2d42, #3b4a70, #121826);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            .geometric-layer {
                position: absolute;
                width: 150%;
                height: 150%;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
                clip-path: polygon(0 0, 50% 0, 100% 50%, 100% 100%, 50% 100%, 0 50%);
                transform: rotate(10deg) scale(1.2);
                opacity: 0.6;
            }
            .geometric-layer:nth-child(2) {
                clip-path: polygon(50% 0, 100% 0, 100% 50%, 50% 100%, 0 100%, 0 50%);
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.1));
                transform: rotate(-20deg) scale(1.3);
                opacity: 0.4;
            }
            .overlay {
                background: rgba(0, 0, 0, 0.3); /* Black overlay for contrast */
                position: absolute;
                inset: 0;
            }
            .home {
                border-radius: 45px;
                height: 80px; 
                width: 80px;  
                object-fit: cover; 
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="background">
            <div class="geometric-layer"></div>
            <div class="geometric-layer"></div>
            <div class="overlay"></div>
            <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                <div>
                    <a href="/">
                        <img src="{{ asset('home.jpg') }}" alt="Home Logo" class="home h-20 w-20">
                    </a>
                </div>
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-lg rounded-xl overflow-hidden sm:rounded-lg relative z-10">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
