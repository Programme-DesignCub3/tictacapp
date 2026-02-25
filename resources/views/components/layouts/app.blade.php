<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @metadata

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <!-- Add your CSS links here -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin scripts --}}
    @stack('plugin-scripts')

    {{-- add custom css --}}
    @stack('custom-css')
    @livewireStyles

</head>

<body @class([
    'bg-linear-0 from-tictac-primary-blue to-tictac-primary-blue-light relative min-h-screen via-50% flex-1 flex flex-col',
])>
    <header class="container relative z-10 mt-8 max-lg:mb-8" x-data="{ openAuth: false, openMobileNav: false }">
        <div
            class="lg:justify-end-safe clamp-[gap,2,4] relative flex content-center items-center justify-between text-white">
            <div class="lg:hidden">
                <div class="relative left-0 top-0 z-50 flex w-full justify-between transition-all duration-300"
                    @click="openMobileNav = !openMobileNav">
                    <x-lucide-menu class="size-8" />
                </div>

                <x-mobile-nav />
            </div>

            <div class="clamp-[gap,2,4] flex content-center items-center justify-between">
                <x-locale-toggler />

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
                        <span class="text-white">Logged in as {{ explode(' ', auth('web')->user()->name)[0] }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-tictac-secondary-yellow hover:text-tictac-primary-blue cursor-pointer"
                                type="submit">
                                Logout
                            </button>
                        </form>
                    </div>
                @endauth
            </div>

        </div>

        <x-nav />
    </header>

    <main class="font-poppins max-w-dvw inline-flex w-full flex-1 flex-col" id="main-content">
        {{ $slot }}
    </main>

    <footer class="px-4">
        <p class="clamp-[text,sm,lg] my-8 text-center text-white">
            Designed by Designcub3. 2025. Copyright to Tic Tac Dua Kelinci.
        </p>
    </footer>

    @stack('custom-scripts')

    @livewireScripts
</body>

</html>
