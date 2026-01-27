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
    <header class="container relative z-10 mt-8">
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

            @guest
                <x-modal>
                    <x-slot:trigger>
                        <div class="flex cursor-pointer items-center gap-2">
                            <x-lucide-lock class="size-8" />
                            <span class="">Login</span>
                        </div>
                    </x-slot:trigger>

                    <div class="mx-auto w-max">
                        <livewire:auth-modal />
                    </div>
                </x-modal>
            @endguest

            @auth('web')
                <div class="flex items-center gap-2">
                    <span class="text-white">Logged in as {{ explode(' ', auth()->user()->name)[0] }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-tictac-secondary-yellow hover:text-tictac-primary-blue" type="submit">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth
        </div>

        <x-nav />

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
