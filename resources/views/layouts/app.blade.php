<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'BoilerMag') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 grid grid-cols-4">
        <div class="col-span-4">
            <livewire:Layout.header />
            <livewire:layout.navigation />
        </div>


        <div class="col-span-1">
            <livewire:layout.side-bar links="$links" />
        </div>



        <div class="col-span-3">
            <!-- Page Heading -->
            @if (isset($header))
            <header>
                <div class="max-w-7xl bg-slate-400 mx-auto pt-8 px-4 mt-10 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>




    </div>
</body>

</html>