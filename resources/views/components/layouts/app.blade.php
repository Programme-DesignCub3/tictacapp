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

<body @class([
    'bg-linear-0 from-tictac-primary-blue to-tictac-primary-blue-light relative min-h-screen via-50%',
])>

    <header class="container relative z-10 py-4">

        <div class="justify-end-safe flex content-center items-center gap-4 text-white">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span>ID</span>
                    <div class="hk-toggle">
                        <input id="local-toggle" type="checkbox">
                        <label for="local-toggle"></label>
                    </div>
                    <span>EN</span>
                </div>
            </div>

            <div class="inline-block h-full min-h-[1em] w-0.5 bg-white"></div>



            <x-modal>
                <x-slot:trigger>
                    <div class="flex cursor-pointer items-center gap-2">
                        <x-lucide-lock class="size-8" />
                        <span>Login</span>
                    </div>
                </x-slot:trigger>

                <div class="mx-auto w-max">
                    <livewire:auth-modal />
            </x-modal>
        </div>
        </div>

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
