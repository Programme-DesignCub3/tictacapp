<x-modal model="openPopUp">
    <div class="flex items-center justify-center w-full h-full">
        <div class="relative w-[90vw] md:w-[900px] aspect-video">

            <template x-if="openPopUp">
                <iframe
                    class="pointer-events-none absolute inset-0 w-full h-full rounded-xl"
                    src="https://www.youtube-nocookie.com/embed/ZnouTsawAtM?autoplay=1&mute=1&loop=1&playlist=ZnouTsawAtM&controls=0&rel=0&playsinline=1&disablekb=1&fs=0&cc_load_policy=0"
                    title="Video"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                ></iframe>
            </template>

            <button
                type="button"
                @click="openPopUp = false"
                class="absolute z-50 -top-4 -right-4 md:-top-6 md:-right-6 outline-none focus:outline-none"
            >
                <img
                    src="{{ asset('img/close-icon.png') }}"
                    class="w-10 h-10 md:w-14 md:h-14"
                    alt="Close"
                >
            </button>

        </div>
    </div>
</x-modal>