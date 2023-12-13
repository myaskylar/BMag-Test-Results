<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans text-gray-900 antialiased">
        <livewire:Layout.header />
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/" wire:navigate>
                    <x-boilermag-logo class="w-20 h-20 fill-current text-blue-900" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <livewire:pages.auth.login />
            </div>
        </div>
    </body>

    {{-- <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif --}}
            
            {{-- <div class="border-2 border-black w-auto h-auto place-items-center py-11 px-12">
                <div class="flex flex-col items-center">
                    <img src="something" alt="small boilermag logo"> --}}
                    {{-- <img src="{{ asset('logos/boilermag.png') }}" alt="Logo"> --}}
                    {{-- <h1 class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Sign in</h1>
                    <p class="text-lg text-cranberry"> BoilerMag Test Strip Results App </p> --}}
                    
            {{-- <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Better Data</span> Scalable AI.</h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

                </div>

                <div class="flex flex-col">
                    <input type="text">
                    <a href="">Forgot email?</a>
                </div>

                <div>
                    <p>New user ?</p>
                    <a href="">Register</a>
                </div>
            </div>
            
        </div>
    </body> --}}
</html>
