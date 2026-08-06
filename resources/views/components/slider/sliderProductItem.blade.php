@props(['productImage', 'mascotImage', 'title'])

<div class="relative flex justify-center items-center">
    <div class="justify-center justify-items-center items-center content-center grid max-w-[60%]">
        <img class="w-full" src="{{ $productImage }}" alt="Packaging {{ $title }}" />
    </div>
    @if ($mascotImage)
        <div class="bottom-0 left-0 absolute max-w-2/5">
            <img loading="lazy" src="{{ $mascotImage }}" alt="Maskot {{ $title }}">
            <div class="swiper-lazy-preloader"></div>
        </div>
    @endif
</div>