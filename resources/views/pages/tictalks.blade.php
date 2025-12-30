<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/slider.js'])
    @endpush

    <div
        class="before:bg-size-[100%_100%] before:absolute before:left-0 before:top-0 before:-z-10 before:inline-block before:h-full before:w-full before:bg-[url('../assets/bg/tictalks-bg.png')] before:bg-center before:bg-no-repeat">
        <div class="max-w-384 mx-auto">
            <div class="mb-28 flex flex-wrap justify-between gap-4">
                <x-breadcrumb :links="[['label' => 'Tictalks', 'url' => route('tictalks')]]" />
                <div class="flex flex-wrap items-center gap-4 text-white">
                    <p class="text-lg md:text-xl">filter: </p>
                    <x-button>Semua</x-button>
                    <x-button>Acara</x-button>
                    <x-button>Promo</x-button>
                </div>
            </div>

            <x-slider.slider id="activitySlider" :items=[1,2,3,4,5,6] />
        </div>
    </div>

</x-layouts.app>
