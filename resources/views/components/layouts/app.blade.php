<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Tictacapp') }}</title>

    {{-- add font css from local assets --}}
    <link rel="stylesheet" href="{{ asset('fonts/font.css') }}">

    <!-- Add your CSS links here -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin scripts --}}
    @stack('plugin-scripts')

    {{-- add custom css --}}
    @stack('custom-css')
    @livewireStyles

</head>

<body class="bg-linear-0 from-tictac-blue to-tictac-blue-light relative min-h-screen via-50%">
    <header class="relative z-10">

        <nav class="container mx-auto text-white">
            <ul
                class="*:font-coopbl n flex flex-wrap items-center justify-between p-4 text-xl font-semibold *:text-center">

                {{-- menulist --}}
                {{-- Crunch Selection, TicTacvity, Logo Image, TicTalks, Game On! --}}
                <li>
                    <a class="text-white hover:text-gray-300" href="{{ route('tictacstation') }}">TicTacStation</a>
                </li>

                <li>
                    <a class="text-white hover:text-gray-300" href="{{ route('tictactivity') }}">TicTacvity</a>
                </li>

                <li>
                    <a class="flex items-center text-white hover:text-gray-300" href="{{ route('home') }}">
                        <img class="h-auto w-60" src="{{ asset('img/logo.png') }}" alt="Logo" />
                    </a>
                </li>

                <li>
                    <a class="text-white hover:text-gray-300" href="{{ route('tictalks') }}">TicTalks</a>
                </li>

                <li>
                    <a class="text-white hover:text-gray-300" href="{{ route('tictacplay') }}">Game On!</a>
                </li>

            </ul>

        </nav>

    </header>

    <main class="" id="main-content">
        {{ $slot }}
    </main>

    <footer>
        <!-- Optional: Add footer here -->
    </footer>

    @livewireScripts
</body>

</html>
