@props(['item'])
<div class="swiper-slide"
    @if (isset($item->key) || isset($item->id)) wire:key="{{ isset($item->key) ? $item->key : $item->id }}" @endif>
    <div class="slider-outer-shadow rounded-4xl bg-tictac-primary-blue relative mb-10 p-2">
        <div class="slider-inner-shadow overflow-clip rounded-3xl bg-white">
            <div class="aspect-6/4 overflow-hidden">
                <img src="{{ $item->getFirstMediaUrl('thumbnail') ? $item->getFirstMediaUrl('thumbnail') : 'https://placehold.co/600x400' }}"
                    alt="">
            </div>

            <div class="flex flex-col gap-4 px-4 pb-10 pt-6 text-center">
                <p class="text-sm font-bold tracking-widest text-orange-500 underline">
                    {{ $item->category->name ?? 'Music' }}
                </p>

                <h3 class="text-tictac-primary-blue font-poppins text-lg font-bold md:text-2xl">
                    {{ $item->title ?? 'Lorem ipsum dolor sit amet' }}
                </h3>

                <p class="text-xs">
                    {{ Str::limit(
                        $item->description
                            ? $item->description
                            : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident quod consequuntur ipsam quaerat sint officia enim tempora',
                        150,
                        '...',
                    ) }}
                </p>
            </div>
        </div>

        <a class="slider-outer-shadow font-super-comic bg-tictac-primary-blue absolute -bottom-4 left-1/2 block w-1/2 min-w-fit -translate-x-1/2 overflow-clip rounded-full p-2 text-center"
            {{-- href="{{ $link }}" --}} href="{{ $item->slug }}">
            <span class="slider-inner-shadow bg-tictac-secondary-yellow relative block overflow-clip rounded-full">
                <span class="text-tictac-primary-blue block size-full px-3 py-1 text-xs">Read more</span>
            </span>
        </a>
    </div>
</div>
