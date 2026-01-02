<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Tictacapp') }}</title>

    <!-- Add your CSS links here -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin scripts --}}
    @stack('plugin-scripts')

    {{-- add custom css --}}
    @stack('custom-css')
    @livewireStyles

</head>

<body class="bg-linear-0 from-tictac-primary-blue to-tictac-primary-blue-light relative min-h-screen via-50%">

    <header class="relative z-10">

        <nav class="container mx-auto text-white">
            <ul class="font-cocogoose flex flex-wrap items-center justify-between p-4 text-center text-xl">

                {{-- menulist --}}
                {{-- Crunch Selection, TicTacvity, Logo Image, TicTalks, Game On! --}}
                <li data-before-content="TicTacStation" @class([
                    'nav--item-outline' => request()->routeIs('tictacstation'),
                ])>
                    <a class="text-white" href="{{ route('tictacstation') }}">TicTacStation</a>
                </li>

                <li data-before-content="TicTacvity" @class([
                    'nav--item-outline' => request()->routeIs('tictactivity'),
                ])>
                    <a class="text-white" href="{{ route('tictactivity') }}">TicTacvity</a>
                </li>

                <li data-before-content="TicTacapp">
                    <a class="flex items-center text-white" href="{{ route('home') }}">
                        <img class="h-auto w-60" src="{{ asset('img/logo.png') }}" alt="Logo" />
                    </a>
                </li>

                <li data-before-content="TicTalks" @class([
                    'nav--item-outline' => request()->routeIs('tictalks'),
                ])>
                    <a class="text-white" href="{{ route('tictalks') }}">TicTalks</a>
                </li>

                <li data-before-content="Game On!" @class([
                    'nav--item-outline' => request()->routeIs('gameon'),
                ])>
                    <a class="text-white" href="{{ route('gameon') }}">Game On!</a>
                </li>

            </ul>

        </nav>

    </header>

    <main class="font-poppins" id="main-content">
        {{ $slot }}
    </main>

    <footer>
        <!-- Optional: Add footer here -->
    </footer>

    @livewireScripts
</body>

</html>
