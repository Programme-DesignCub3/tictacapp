@props(['item', 'routeName' => null])
<div class="swiper-slide"
    @if (isset($item->key) || isset($item->id)) wire:key="{{ isset($item->key) ? $item->key : $item->id }}" @endif>
    <div class="relative bg-tictac-primary-blue slider-outer-shadow mb-10 p-2 rounded-4xl">
        <div class="bg-white slider-inner-shadow rounded-3xl overflow-clip">
            <div class="aspect-6/4 overflow-hidden">
                <img class="w-full"
                    src="{{ $item->getFirstMediaUrl('thumbnail') ? $item->getFirstMediaUrl('thumbnail') : 'https://placehold.co/600x400' }}"
                    alt="{{$item->title ?? '' }}">
            </div>

            <div class="flex flex-col gap-4 px-4 pt-6 pb-10 text-center">
                <p class="font-bold text-orange-500 text-sm underline tracking-widest">
                    {{ $item->category->name ?? '' }}
                </p>

                <h3 class="font-poppins font-bold text-tictac-primary-blue text-lg md:text-2xl">
                    {{ $item->title ?? '' }}
                </h3>

                <p class="text-xs">
                    {{ Str::limit($item->description ? $item->description : '', 150, '...') }}
                </p>
            </div>
        </div>

        <a class="block -bottom-4 left-1/2 absolute bg-tictac-primary-blue slider-outer-shadow p-2 rounded-full w-1/2 min-w-fit overflow-clip font-super-comic text-center -translate-x-1/2"
            {{-- href="{{ $link }}" --}} href="{{ $routeName ? route($routeName . '.show', $item->slug) : '#' }}">
            <span class="block relative bg-tictac-secondary-yellow slider-inner-shadow rounded-full overflow-clip">
                <span class="block px-3 py-1 size-full text-tictac-primary-blue text-xs">Read more</span>
            </span>
        </a>
    </div>
</div>
