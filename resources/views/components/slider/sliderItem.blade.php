@props(['item'])
<div class="swiper-slide"
    @if (isset($item['key']) || isset($item['id'])) wire:key="{{ isset($item['key']) ? $item['key'] : $item['id'] }}" @endif>
    <div class="slider-outer-shadow rounded-4xl bg-tictac-primary-blue relative mb-10 p-2">
        <div class="slider-inner-shadow rounded-4xl overflow-clip bg-white">
            <div>
                <img src="{{ $item['thumbnail'] ?? 'https://placehold.co/600x400' }}" alt="">
            </div>

            <div class="flex flex-col gap-4 px-4 pb-10 pt-6 text-center">
                <p class="text-sm font-bold tracking-widest text-orange-500 underline">
                    {{ $item['category'] ?? 'Music' }}
                </p>

                <h3 class="text-tictac-primary-blue font-poppins text-lg font-bold md:text-2xl">
                    {{ $item['title'] ?? 'Lorem ipsum dolor sit amet' }}
                </h3>

                <p class="text-xs">
                    {{ $item['excerpt'] ??
                        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident quod consequuntur ipsam quaerat sint officia enim tempora' }}
                </p>
            </div>
        </div>

        <a class="slider-outer-shadow font-super-comic bg-tictac-primary-blue absolute -bottom-4 left-1/2 block w-1/2 min-w-fit -translate-x-1/2 overflow-clip rounded-full p-2 text-center"
            {{-- href="{{ $link }}" --}} href="#">
            <span class="slider-inner-shadow bg-tictac-secondary-yellow relative block overflow-clip rounded-full">
                <span class="text-tictac-primary-blue block size-full px-3 py-1 text-xs">Read more</span>
            </span>
        </a>
    </div>
</div>
