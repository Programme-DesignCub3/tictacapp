<x-modal model="openPopUp">
    <div class="flex justify-center items-center p-4 w-full h-full">
        <div @class([
            'relative',
            'slider-outer-shadow rounded-4xl bg-card-blue p-2 md:p-3' => db_config('pop-up.enable_container'),
        ])>
            <div @class([
                'relative bg-white rounded-3xl',
                'slider-inner-shadow p-2 md:p-3' => db_config('pop-up.enable_container'),
            ])>
                @if (db_config('pop-up.image'))
                    @if (db_config('pop-up.url'))
                        <a href="{{ db_config('pop-up.url') }}" target="_blank">
                    @endif
                    <picture>
                        <source
                            srcset="{{ asset('storage/' . pathinfo(db_config('pop-up.image'), PATHINFO_DIRNAME) . '/' . pathinfo(db_config('pop-up.image'), PATHINFO_FILENAME) . '-mobile.webp') }}"
                            media="(max-width: 767px)"
                            type="image/webp"
                        >
                        <source
                            srcset="{{ asset('storage/' . pathinfo(db_config('pop-up.image'), PATHINFO_DIRNAME) . '/' . pathinfo(db_config('pop-up.image'), PATHINFO_FILENAME) . '-mobile.' . pathinfo(db_config('pop-up.image'), PATHINFO_EXTENSION)) }}"
                            media="(max-width: 767px)"
                        >
                        <source
                            srcset="{{ asset('storage/' . pathinfo(db_config('pop-up.image'), PATHINFO_DIRNAME) . '/' . pathinfo(db_config('pop-up.image'), PATHINFO_FILENAME) . '.webp') }}"
                            type="image/webp"
                        >
                        <img
                            src="{{ asset('storage/' . pathinfo(db_config('pop-up.image'), PATHINFO_DIRNAME) . '/' . pathinfo(db_config('pop-up.image'), PATHINFO_BASENAME)) }}"
                            alt=""
                            class="block mx-auto rounded-xl w-auto max-w-[90vw] md:max-w-[80vw] lg:max-w-[900px] h-auto max-h-[75vh] md:max-h-[85vh] object-contain"
                        >
                    </picture>
                    @if (db_config('pop-up.url'))
                        </a>
                    @endif
                @endif
            </div>
            <button
                type="button"
                @click="openPopUp = false"
                class="-top-4 md:-top-6 -right-4 md:-right-6 z-50 absolute"
            >
                <img
                    src="{{ asset('img/close-icon.png') }}"
                    class="w-10 md:w-14 h-10 md:h-14"
                    alt="Close"
                >
            </button>
        </div>
    </div>
</x-modal>
