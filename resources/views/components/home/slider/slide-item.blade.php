@props(['item'])
<div class="swiper-slide">
    <div class="flex flex-col items-center">
        <picture>
            <source type="image/webp" srcset="{{ $item['islandImageWebp'] }}">
            <img data-swiper-parallax="-700"
                {{ $attributes->merge(['class' => 'max-h-[50dvh] w-auto shrink basis-1/2 object-contain']) }}
                src="{{ $item['islandImage'] }}" alt="">
        </picture>

        <div class="flex justify-center items-center -mt-8 w-[50dvw] max-w-lg" data-swiper-parallax="-500">
            <picture>
                <source type="image/webp"
                    srcset="{{ preg_replace('/\.(png|jpe?g)(\?.*)?$/i', '.webp${2}', $item['textImage']) }}">
                <img src="{{ $item['textImage'] }}" alt="">
            </picture>
        </div>

        @if ($item['link'] === route('gameon'))
            @guest
                <p class="max-w-3/4 font-bold text-white text-center text-pretty clamp-[text,sm,xl] clamp-[mt,6,20]"
                    data-swiper-parallax="-400"
                    @click="()=>{ openAuth = !openAuth; openMobileNav = false;}">
                @endguest
                @auth('web')
                    <a class="max-w-3/4 font-bold text-white text-center text-pretty clamp-[text,sm,xl] clamp-[mt,6,20]"
                        data-swiper-parallax="-400" href="{{ $item['link'] }}">
                    @endauth

                    {{ $item['text'] }}

                    @auth('web')
                    </a>
                @endauth

                @guest
                </p>
            @endguest
        @else
            <a class="max-w-3/4 font-bold text-white text-center text-pretty clamp-[text,sm,xl] clamp-[mt,6,20]"
                data-swiper-parallax="-400" href="{{ $item['link'] }}">
                {{ $item['text'] }}
            </a>
        @endif
    </div>
</div>
