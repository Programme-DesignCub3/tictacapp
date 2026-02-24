<div class="max-lg:hidden">
    <nav class="container mx-auto text-white">
        <svg style="position: absolute; width: 0; height: 0;" aria-hidden="true">
            <filter id="smooth-sticker">
                <feMorphology operator="dilate" radius="3" in="SourceAlpha" result="thicken" />

                <feGaussianBlur in="thicken" stdDeviation="1.5" result="blurred" />

                <feColorMatrix in="blurred" type="matrix"
                    values="1 0 0 0 0
                               0 1 0 0 0
                               0 0 1 0 0
                               0 0 0 25 -7"
                    result="smooth-outline" />

                <feFlood flood-color="#FF6B00" result="orange" />
                <feComposite in="orange" in2="smooth-outline" operator="in" result="final-outline" />

                <feMerge>
                    <feMergeNode in="final-outline" />
                    <feMergeNode in="SourceGraphic" />
                </feMerge>
            </filter>
        </svg>

        <ul class="font-poppins flex flex-wrap items-center justify-between p-4 text-center text-xl font-bold">
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
    </nav>
</div>
