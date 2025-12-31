@props(['id', 'items' => []])

<!-- Slider main container -->
<div class="swiper max-w-full" id="{{ $id }}">

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

        <!-- Slides -->
        @foreach ($items as $item)
            <div class="swiper-slide"
                @if (isset($item['key']) || isset($item['id'])) wire:key="{{ isset($item['key']) ? $item['key'] : $item['id'] }}" @endif>
                <x-slider.sliderProductItem :productImage="$item['productImage']" :mascotImage="$item['productMascot']" />
            </div>
        @endforeach

    </div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev">
        <img class="rotate-180" src="{{ asset('img/slider-arrow.png') }}" alt="">
    </div>

    <div class="swiper-button-next">
        <img src="{{ asset('img/slider-arrow.png') }}" alt="">
    </div>

    <!-- If we need scrollbar -->
    {{-- <div class="swiper-scrollbar"></div> --}}
</div>
