<!-- Menu Mobile -->



<nav class="lg:hidden" x-cloak>
    <div class="bg-linear-to-b from-tictac-secondary-blue to-tictac-primary-blue fixed left-0 top-0 z-40 flex min-h-screen w-full flex-col items-center justify-center text-white md:hidden"
        x-show="openMobileNav" x-transition:enter="transform transition duration-500 ease-in-out"
        x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transform transition duration-500 ease-in-out"
        x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="-translate-y-full opacity-0">
        <ul
            class="font-poppins flex flex-col flex-wrap items-center justify-between gap-4 p-4 text-center text-xl font-bold">
            {{-- menulist --}}
            {{-- Crunch Selection, TicTactivity, Logo Image, TicTalks, Game On! --}}
            <li data-before-content="TicTacapp">
                <a class="flex items-center text-white" href="{{ route('home') }}">
                    <img class="h-auto w-60" src="{{ asset('img/logo.png') }}" alt="Logo" />
                </a>
            </li>

            <li data-before-content="TicTacStation" @class([
                'nav--item-outline' => request()->routeIs('tictacstation'),
            ])>
                <a class="text-white" href="{{ route('tictacstation') }}">TicTacStation</a>
            </li>

            <li data-before-content="TicTactivity" @class([
                'nav--item-outline' => request()->routeIs('tictactivity'),
            ])>
                <a class="text-white" href="{{ route('tictactivity.index') }}">TicTactivity</a>
            </li>


            <li data-before-content="TicTalks" @class([
                'nav--item-outline' => request()->routeIs('tictalks'),
            ])>
                <a class="text-white" href="{{ route('tictalks.index') }}">TicTalks</a>
            </li>

            <li data-before-content="Game On!" @class([
                'nav--item-outline' => request()->routeIs('gameon'),
            ])>
                @auth('web')
                    <a class="text-white" href="{{ route('gameon') }}">Game On!</a>
                @endauth

                @guest
                    <p class="cursor-pointer text-white"
                        @click="()=>{
                        openAuth = !openAuth;
                        openMobileNav = false;
                    }">
                        Game On!</p>
                @endguest
            </li>
        </ul>
    </div>
</nav>
