<div class="max-lg:hidden">
    <nav class="mx-auto text-white container">
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

        <ul class="flex flex-wrap justify-between items-center p-4">
            {{-- menulist --}}
            {{-- Crunch Selection, TicTactivity, Logo Image, TicTalks, Game On! --}}
            <li class="nav-link {{ active_class(Route::is('tictacstation*'), 'active-nav') }}">
                <a href="{{ route('tictacstation') }}">TicTacStation</a>
            </li>

            <li class="nav-link {{ active_class(Route::is('tictactivity*'), 'active-nav') }}">
                <a href="{{ route('tictactivity.index') }}">TicTactivity</a>
            </li>

            <li>
                <a class="flex items-center text-white" href="{{ route('home') }}">
                    <img class="w-60 h-auto" width="240" height="127" src="{{ asset('img/logo.png') }}" alt="Logo" />
                </a>
            </li>

            <li class="nav-link {{ active_class(Route::is('tictalks*'), 'active-nav') }}">
                <a href="{{ route('tictalks.index') }}">TicTalks</a>
            </li>

            <li class="nav-link {{ active_class(Route::is('gameon*'), 'active-nav') }}">
                @auth('web')
                    <a href="{{ route('gameon') }}">Game On!</a>
                @endauth

                @guest
                    <a href="#"
                        @click="(e)=>{
                            e.preventDefault();
                            openAuth = !openAuth;
                            openMobileNav = false;
                        }">
                        Game On!</a>
                @endguest
            </li>
        </ul>
    </nav>
</div>
