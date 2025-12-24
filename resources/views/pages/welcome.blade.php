<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/gsap.js'])
    @endpush

    {{-- ...existing code or welcome page content... --}}

    {{-- <div class="top-[60px] left-[10%] absolute w-[705px]">
            <img src="{{ asset('img/text/Website TicTac-03.png') }}" alt="" class="w-full text-welcome-image">
        </div> --}}

    <div id="smooth-wrapper">
        <div class="relative pt-28" id="smooth-content">
            <picture>
                <source srcset="{{ asset('img/resized_grafich-bg.webp') }}" type="image/webp">
                <source srcset="{{ asset('img/grafich_bg--sm.png') }}" type="image/jpeg">
                <img class="h-auto w-full" id="mainbackground" src="{{ asset('img/grafich_bg--sm.png') }}" alt="">
            </picture>
            {{-- <img src="{{ asset('img/cave1-1-01-sm.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover"> --}}

            {{-- Cloud images --}}

            <div class="absolute right-[16%] top-[4%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 290px; height: auto;">
                </div>
            </div>

            <div class="absolute right-[15%] top-[9%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 100px; height: auto;">
                </div>
            </div>

            <div class="absolute left-[20%] top-[30%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 300px; height: auto;">
                </div>
            </div>

            <div class="absolute left-[60%] top-[66%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 150px; height: auto;">
                </div>
            </div>

            <div class="absolute left-[10%] top-[70.8%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 240px; height: auto;">
                </div>
            </div>

            <div class="absolute left-[10%] top-[76%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 90px; height: auto;">
                </div>
            </div>

            <div class="absolute right-[28%] top-[84%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 360px; height: auto;">
                </div>
            </div>

            <div class="absolute right-[20%] top-[88%] h-[200px] w-[200px]">
                <div class="relative h-full w-full">
                    <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                        src="{{ asset('img/cloud.png') }}" alt="" style="width: 100px; height: auto;">
                </div>
            </div>

            {{-- End of Cloud images --}}


            {{-- Text Image --}}
            <a class="absolute right-[32%] top-[26.7%]" href="#">
                <img class="text-image w-[355px]" src="{{ asset('img/text/Website TicTac-04.png') }}"
                    alt="Crunch Selection" title="Crunch Selection">
            </a>

            <a class="absolute left-[13%] top-[49.5%]" href="#">
                <img class="text-image w-[355px]" src="{{ asset('img/text/Website TicTac-05.png') }}" alt="TicTacvity"
                    title="TicTacvity">
            </a>

            <a class="absolute right-[10%] top-[62.1%]" href="#">
                <img class="text-image w-[355px]" src="{{ asset('img/text/Website TicTac-06.png') }}" alt="TicTacvity"
                    title="TicTacvity">
            </a>

            <a class="absolute left-[33.8%] top-[83.6%]" href="#">
                <img class="text-image w-[355px]" src="{{ asset('img/text/Website TicTac-07.png') }}" alt="TicTacvity"
                    title="TicTacvity">
            </a>

        </div>
    </div>

    <div class="fixed right-[4%] top-[20%] w-[180px]">
        <div class="relative w-full">
            <img class="cloud absolute h-auto w-auto" data-direction="left" data-speed="1"
                src="{{ asset('img/air_baloon.png') }}" alt="" style="width: 290px; height: auto;">
        </div>
    </div>
</x-layouts.app>
