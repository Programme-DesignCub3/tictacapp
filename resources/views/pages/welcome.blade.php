<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/gsap.js'])
    @endpush

    {{-- ...existing code or welcome page content... --}}

    {{-- <div class="top-[60px] left-[10%] absolute w-[705px]">
            <img src="{{ asset('img/text/Website TicTac-03.png') }}" alt="" class="w-full text-welcome-image">
        </div> --}}

    <div id="smooth-wrapper">
        <div class="relative mt-28" id="smooth-content">
            <img class="h-auto w-full" id="mainbackground" src="{{ asset('img/main-bg.png') }}" alt="mainbackground">
            {{-- <img src="{{ asset('img/cave1-1-01-sm.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover"> --}}

            {{-- Cloud images --}}

            <div class="absolute right-[16%] top-[4%] w-[10vw]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 290px; height: auto;">
                </div>
            </div>

            <div class="absolute right-[15%] top-[9%] w-[10vw]">
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
                <img class="text-image w-[20vw]" src="{{ asset('img/text/tictacstation.png') }}" alt="TicTacStation"
                    title="TicTacStation">
            </a>

            <a class="absolute left-[13%] top-[45%]" href="{{ route('tictactivity') }}">
                <img class="text-image w-[20vw]" src="{{ asset('img/text/tictactivity.png') }}" alt="TicTacTivity"
                    title="TicTacTivity">
            </a>

            <a class="absolute right-[10%] top-[59%]" href="{{ route('tictalks') }}">
                <img class="text-image w-[20vw]" src="{{ asset('img/text/tictactalks.png') }}" alt="TicTacTalks"
                    title="TicTacTalks">
            </a>

            <a class="absolute left-[33%] top-[82%]" href="{{ route('tictacplay') }}">
                <img class="text-image w-[15vw]" src="{{ asset('img/text/tictacplay.png') }}" alt="TicTacPlay"
                    title="TicTacPlay">
            </a>

            {{-- character images --}}
            <div class="absolute right-[27%] top-[17%]">
                <img class="text-image w-[12vw]" src="{{ asset('img/char/original.gif') }}" alt="original"
                    title="original">
            </div>

            <div class="absolute right-[33%] top-[36%]">
                <img class="text-image w-[13vw]" src="{{ asset('img/char/cow.gif') }}" alt="TicTacTivity"
                    title="TicTacTivity">
            </div>

            <div class="absolute left-[11%] top-[58%]">
                <img class="text-image w-[12vw]" src="{{ asset('img/char/seweed.gif') }}" alt="TicTacPlay"
                    title="TicTacPlay">
            </div>

            <div class="absolute right-[20%] top-[50%]">
                <img class="text-image w-[12vw]" src="{{ asset('img/char/mix.gif') }}" alt="TicTacTalks"
                    title="TicTacTalks">
            </div>

            <div class="absolute left-[46%] top-[79%]">
                <img class="text-image w-[15vw]" src="{{ asset('img/char/spicy.gif') }}" alt="TicTacTalks"
                    title="TicTacTalks">
            </div>

            <div class="absolute right-[13%] top-[71%]">
                <img class="text-image w-[12vw]" src="{{ asset('img/char/noodle.gif') }}" alt="TicTacTalks"
                    title="TicTacTalks">
            </div>


        </div>
    </div>

    <div class="fixed right-[4%] top-[20%] w-[10vw]">
        <div class="relative w-full">
            <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                src="{{ asset('img/air_baloon.png') }}" alt="" style="width: 290px; height: auto;">
        </div>
    </div>
</x-layouts.app>
