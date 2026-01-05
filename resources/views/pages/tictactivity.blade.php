<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/slider.js'])
    @endpush


    <div
        class="before:bg-size-[70%_auto] before:bg-bottom-right relative before:absolute before:left-0 before:top-0 before:-z-10 before:inline-block before:h-full before:w-full before:bg-[url('../assets/bg/tictactivity-bg-island.png')] before:bg-no-repeat">

        <div class="absolute left-[1%] top-[7%] w-[13vw] max-md:hidden">
            <div class="relative h-full w-full">
                <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                    src="{{ asset('img/cloud.png') }}" alt="" style="width: 290px; height: auto;">
            </div>
        </div>

        <div class="max-w-384 mx-auto px-4">

            <div class="mb-28 flex flex-wrap justify-between gap-4">
                <x-breadcrumb :links="[['label' => 'Tictactivity', 'url' => route('tictactivity')]]" />
                <div class="flex flex-wrap items-center gap-4 text-white">
                    <x-button>Semua</x-button>
                    <x-button>Kuliner</x-button>
                    <x-button>Olahraga</x-button>
                    <x-button>Music</x-button>
                </div>
            </div>

            <x-slider.slider id="activitySlider" :items="[
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-1.png')],
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-2.png')],
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-3.png')],
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-4.png')],
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-1.png')],
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-2.png')],
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-3.png')],
                ['thumbnail' => asset('img/thumbnail_placeholder/activity-4.png')],
            ]" />
        </div>
    </div>

</x-layouts.app>
