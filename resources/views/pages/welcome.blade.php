<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/home.js', 'resources/js/slider.js'])
    @endpush

    <div class="max-lg:hidden">
        <div class="-mt-72" id="smooth-wrapper">
            <div class="relative" id="smooth-content">
                <img class="h-auto w-full" id="mainbackground" src="{{ asset('img/main-bg-3.png') }}" alt="mainbackground">
                {{-- <img src="{{ asset('img/cave1-1-01-sm.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover"> --}}
                {{-- Cloud images --}}
                <div class="absolute right-[16%] top-[14%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 290px; height: auto;">
                    </div>
                </div>
                <div class="absolute right-[15%] top-[19%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 100px; height: auto;">
                    </div>
                </div>
                <div class="absolute left-[20%] top-[30%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 300px; height: auto;">
                    </div>
                </div>
                <div class="absolute left-[60%] top-[66%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 150px; height: auto;">
                    </div>
                </div>
                <div class="absolute left-[10%] top-[70.8%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 240px; height: auto;">
                    </div>
                </div>
                <div class="absolute left-[10%] top-[76%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 90px; height: auto;">
                    </div>
                </div>
                <div class="absolute right-[28%] top-[84%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 360px; height: auto;">
                    </div>
                </div>
                <div class="absolute right-[20%] top-[88%] w-[10vw]">
                    <div class="relative h-full w-full">
                        <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                            src="{{ asset('img/cloud.png') }}" alt="" style="width: 100px; height: auto;">
                    </div>
                </div>
                {{-- End of Cloud images --}}
                {{-- Text Image --}}
                <a class="absolute right-[32%] top-[26%]" href="{{ route('tictacstation') }}">
                    <img class="text-image w-[20vw]" src="{{ asset('img/text/tictacstation.png') }}"
                        alt="tictacstation" title="tictacstation">
                    <p class="text-center text-white">Click here to read more about
                        <br /> our product varieties >
                    </p>
                </a>
                <a class="absolute left-[13%] top-[45%]" href="{{ route('tictactivity') }}">
                    <img class="text-image w-[20vw]" src="{{ asset('img/text/tictactivity.png') }}" alt="TicTacTivity"
                        title="TicTacTivity">
                    <p class="text-center text-white">Click here to read more about
                        <br /> our recent campaign >
                    </p>
                </a>
                <a class="absolute right-[10%] top-[59%]" href="{{ route('tictalks') }}">
                    <img class="text-image w-[20vw]" src="{{ asset('img/text/tictactalks.png') }}" alt="TicTacTalks"
                        title="TicTacTalks">
                    <p class="text-center text-white">Click here to read more about
                        <br /> our intriguing articles >
                    </p>
                </a>
                <a class="absolute left-[33%] top-[82%]" href="{{ route('gameon') }}">
                    <img class="text-image w-[15vw]" src="{{ asset('img/text/gameon.png') }}" alt="gameon"
                        title="gameon">
                    <p class="text-center text-white">Click here to play some
                        <br /> exciting games!s >
                    </p>
                </a>
                {{-- character images --}}
                <div class="absolute right-[26.5%] top-[17.7%]">
                    <img class="text-image w-[13vw]" src="{{ asset('img/char/original.gif') }}" alt="original"
                        title="original">
                </div>
                {{-- bush --}}
                <div class="absolute right-[29.6%] top-[18.7%]">
                    <img class="w-[17.3vw]" src="{{ asset('img/bush.png') }}" alt="bush" title="bush">
                </div>
                <div class="absolute right-[33%] top-[36%]">
                    <img class="text-image w-[13vw]" src="{{ asset('img/char/cow.gif') }}" alt="TicTacTivity"
                        title="TicTacTivity">
                </div>
                <div class="absolute left-[11%] top-[58%]">
                    <img class="text-image w-[12vw]" src="{{ asset('img/char/seaweed.gif') }}" alt="gameon"
                        title="gameon">
                </div>
                <div class="absolute right-[20%] top-[50%]">
                    <img class="text-image w-[12vw]" src="{{ asset('img/char/mix.gif') }}" alt="TicTacTalks"
                        title="TicTacTalks">
                </div>
                <div class="absolute left-[44%] top-[79%]">
                    <img class="text-image w-[15vw]" src="{{ asset('img/char/spicy.gif') }}" alt="TicTacTalks"
                        title="TicTacTalks">
                </div>
                <div class="absolute right-[13%] top-[71%]">
                    <img class="text-image w-[12vw]" src="{{ asset('img/char/noodle.gif') }}" alt="TicTacTalks"
                        title="TicTacTalks">
                </div>
            </div>
        </div>
        <div class="fixed right-[4%] top-[20%] w-[7vw]">
            <div class="relative w-full">
                <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                    src="{{ asset('img/air_baloon.png') }}" alt="" style="width: 290px; height: auto;">
            </div>
        </div>



    </div>
    <!-- Slider main container -->
    <div class="relative">
        <div class="swiper max-lg:hidden" id="home-mobile-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    @push('custom-scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let homeSlider;
                let isMobile;
                const maxWidth = '64rem';
                const initSlider = () => {
                    homeSlider = new window.Swiper("#home-mobile-slider", {
                        slidesPerView: 1,
                    });
                }

                if (window.matchMedia(`screen and (max-width: ${maxWidth})`).matches) {
                    isMobile = true;
                    initSlider();
                }

                const homeSliderResizeHandler = () => {
                    if (window.matchMedia(`screen and (max-width: ${maxWidth})`).matches) {
                        initSlider();
                    } else {
                        if (!isMobile) {
                            if (homeSlider) {
                                homeSlider.destroy();
                                homeSlider = null;
                            }
                        }
                    }
                }

                window.addEventListener('resize', homeSliderResizeHandler);


            });
        </script>
    @endpush
</x-layouts.app>
