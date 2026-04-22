@props(['id', 'items' => []])

<!-- Slider main container -->
<div class="justify-center justify-items-center items-center content-center grid grid-overlay">
    <div class="relative sm:-ml-40">
        <img class="top-0 left-[15%] absolute h-[25%] cloud" data-direction="right" data-speed="1"
            src="{{ asset('img/cloud.png') }}" alt="" />
        <img class="top-1/4 right-[5%] absolute h-[10%] cloud" data-direction="left" data-speed="1"
            src="{{ asset('img/cloud.png') }}" alt="" />
        <img src="{{ asset('img/product-item-bg.png') }}" alt="" />
    </div>

    <div class="max-w-full swiper" id="{{ $id }}">

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <!-- Slides -->
            @foreach ($items as $item)
                <div class="swiper-slide"
                    @if (isset($item['key']) || isset($item['id'])) wire:key="{{ isset($item['key']) ? $item['key'] : $item['id'] }}" @endif>
                    <x-slider.sliderProductItem
                        :title="$item['name']"
                        :productImage="$item['packaging']"
                        :mascotImage="$item['mascot']" />
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
</div>
