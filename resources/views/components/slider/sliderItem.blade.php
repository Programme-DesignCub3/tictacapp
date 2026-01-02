@props(['item'])
<div class="slider-outer-shadow rounded-4xl relative mb-10 bg-blue-700 p-2">
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

    <a class="slider-outer-shadow font-super-comic absolute -bottom-4 left-1/2 block w-1/2 min-w-fit -translate-x-1/2 overflow-clip rounded-full bg-blue-700 p-2 text-center"
        {{-- href="{{ $link }}" --}} href="#">
        <span class="slider-inner-shadow relative block overflow-clip rounded-full bg-yellow-300">
            <span class="text-tictac-primary-blue block size-full px-3 py-1 text-xs">Read more</span>
        </span>
    </a>
</div>
