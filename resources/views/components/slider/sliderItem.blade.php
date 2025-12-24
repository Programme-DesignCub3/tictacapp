@props(['category', 'title', 'excerpt', 'link'])

<div class="slider-outer-shadow relative mb-10 rounded-xl bg-blue-700 p-2">
    <div class="slider-inner-shadow overflow-clip rounded-lg bg-white">

        <div>
            <img src="https://placehold.co/600x400" alt="">
        </div>

        <div class="flex flex-col gap-4 px-4 pb-10 pt-6 text-center">
            <p class="text-sm font-bold tracking-widest text-orange-500 underline">
                Music
                {{-- {{ $category }} --}}
            </p>

            <h3 class="text-tictac-blue text-lg font-bold">
                Lorem ipsum dolor sit amet
                {{-- {{ $title }} --}}
            </h3>

            <p class="text-xs">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident quod consequuntur ipsam quaerat
                sint officia enim tempora
                {{-- {{ $excerpt }} --}}
            </p>
        </div>

    </div>
    <a class="slider-outer-shadow absolute -bottom-4 left-1/2 block w-1/2 min-w-fit -translate-x-1/2 overflow-clip rounded-full bg-blue-700 p-2"
        {{-- href="{{ $link }}" --}} href="#">
        <span class="slider-inner-shadow relative block overflow-clip rounded-full bg-yellow-300">
            <span class="text-tictac-blue block size-full px-3 py-1 text-xs">Read more</span>
        </span>
    </a>
</div>
