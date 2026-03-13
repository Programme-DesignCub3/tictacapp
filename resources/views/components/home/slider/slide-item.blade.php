@props(['item'])
<div class="swiper-slide">
    <div class="flex flex-col items-center">
        <img data-swiper-parallax="-700"
            {{ $attributes->merge(['class' => 'max-h-[50dvh] w-auto shrink basis-1/2 object-contain']) }}
            src="{{ $item['islandImage'] }}" alt="">

        <div class="-mt-8 flex w-[50dvw] max-w-lg items-center justify-center" data-swiper-parallax="-500">
            <img src="{{ $item['textImage'] }}" alt="">
        </div>

        @if ($item['link'] === route('gameon'))
            @guest
                <p class="max-w-3/4 clamp-[text,sm,xl] clamp-[mt,6,20] text-pretty text-center font-bold text-white"
                    data-swiper-parallax="-400"
                    @click="()=>{
                    openAuth = !openAuth;
                    openMobileNav = false;
                }">
                @endguest
                @auth('web')
                    <a class="max-w-3/4 clamp-[text,sm,xl] clamp-[mt,6,20] text-pretty text-center font-bold text-white"
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
            <a class="max-w-3/4 clamp-[text,sm,xl] clamp-[mt,6,20] text-pretty text-center font-bold text-white"
                data-swiper-parallax="-400" href="{{ $item['link'] }}">
                {{ $item['text'] }}
            </a>
        @endif
    </div>
</div>
