@props(['id', 'items' => []])

<!-- Slider main container -->
<div class="swiper pb-8! pr-4!" id="{{ $id }}">

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

        <!-- Slides -->
        @foreach ($items as $item)
            <x-slider.sliderItem :item="$item" />
        @endforeach

    </div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
