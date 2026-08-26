<div class="lg:hidden relative">

    <div class="z-0 size-full">
        <img class="top-0 left-[15%] absolute h-[15%] cloud-slider" data-direction="right" data-speed="1"
            src="{{ asset('img/cloud.png') }}" alt="" />
        <img class="top-1/4 right-[5%] absolute h-[10%] cloud-slider" data-direction="left" data-speed="1"
            src="{{ asset('img/cloud.png') }}" alt="" />

    </div>

    <!-- Slider main container -->
    <div class="max-lg:hidden justify-center items-center px-8! min-h-[50dvh] swiper flex!" id="home-mobile-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @php
                $items = [
                    [
                        'islandImage' => asset('img/mobile/tictacstation.png'),
                        'islandImageWebp' => asset('img/mobile/tictacstation.webp'),
                        'textImage' => asset('img/text/tictacstation.png'),
                        'textImageWebp' => asset('img/text/tictacstation.webp'),
                        'text' => __('title.slider.tictacstation'),
                        'classModifier' => '',
                        'link' => route('tictacstation'),
                    ],
                    [
                        'islandImage' => asset('img/mobile/tictactivity.png'),
                        'islandImageWebp' => asset('img/mobile/tictactivity.webp'),
                        'textImage' => asset('img/text/tictactivity.png'),
                        'textImageWebp' => asset('img/text/tictactivity.webp'),
                        'text' => __('title.slider.tictactivity'),
                        // 'classModifier' => '-ml-32 scale-125 mt-8',
                        'classModifier' => '',
                        'link' => route('tictactivity.index'),
                    ],
                    [
                        'islandImage' => asset('img/mobile/tictactalks.png'),
                        'islandImageWebp' => asset('img/mobile/tictactalks.webp'),
                        'textImage' => asset('img/text/tictactalks.png'),
                        'textImageWebp' => asset('img/text/tictactalks.webp'),
                        'text' => __('title.slider.tictalks'),
                        'classModifier' => '',
                        'link' => route('tictalks.index'),
                    ],
                    [
                        'islandImage' => asset('img/mobile/gameon.png'),
                        'islandImageWebp' => asset('img/mobile/gameon.webp'),
                        'textImage' => asset('img/text/gameon.png'),
                        'textImageWebp' => asset('img/text/gameon.webp'),
                        'text' => __('title.slider.gameon'),
                        // 'classModifier' => '-ml-32 -mb-8 scale-110',
                        'classModifier' => '',
                        'link' => route('gameon'),
                    ],
                ];
            @endphp

            @foreach ($items as $item)
                <x-home.slider.slide-item class="{{ $item['classModifier'] }}" :item="$item" />
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <div class="flex flex-wrap justify-center gap-8 my-2 pt-8">
        @php
            $socials = [
                [
                    'name' => 'whatsaap',
                    'image' => asset('img/social-icons/wa.svg'),
                    'link' => db_config('social.whatsapp'),
                ],
                [
                    'name' => 'facebook',
                    'image' => asset('img/social-icons/fb.svg'),
                    'link' => db_config('social.facebook'),
                ],
                [
                    'name' => 'tiktok',
                    'image' => asset('img/social-icons/tiktok.svg'),
                    'link' => db_config('social.tiktok'),
                ],
                [
                    'name' => 'instagram',
                    'image' => asset('img/social-icons/ig.svg'),
                    'link' => db_config('social.instagram'),
                ],
                [
                    'name' => 'youtube',
                    'image' => asset('img/social-icons/yt.svg'),
                    'link' => db_config('social.youtube'),
                ],
            ];

            $socials = array_filter($socials, fn($s) => !empty($s['link']));
        @endphp

        @foreach ($socials as $social)
            <a href="{{ $social['link'] }}" target="_blank">
                <img class="size-8" src="{{ $social['image'] }}" alt="">
            </a>
        @endforeach
    </div>
</div>

@push('custom-scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            let homeSlider;
            let homeCloud;
            let isMobile = false;
            const maxWidth = "64rem";

            const initSlider = () => {
                homeSlider = new window.Swiper("#home-mobile-slider", {
                    slidesPerView: 1,
                    parallax: true,
                    // slidesPerView: "auto",
                    spaceBetween: 200,
                    lazy: true,
                });

                const clouds = document.querySelectorAll(".cloud-slider");

                clouds.forEach((cloudImg, index) => {
                    const wrapper = cloudImg.parentElement;

                    // Get data attributes from the cloud image
                    const direction = cloudImg.getAttribute("data-direction") || "left";

                    homeCloud = window.gsap.to(cloudImg, {
                        x: Math.random() * (direction === "left" ? -70 : 70),
                        duration: 4 + Math.random() * 2,
                        ease: "sine.inOut",
                        yoyo: true,
                        repeat: -1,
                        delay: 1 + Math.random(),
                    });
                });

            };

            if (window.matchMedia(`screen and (max-width: ${maxWidth})`).matches) {
                isMobile = true;
                initSlider();
            }

            const homeSliderResizeHandler = () => {
                if (window.matchMedia(`screen and (max-width: ${maxWidth})`).matches) {
                    if (!isMobile) {
                        isMobile = true;
                        initSlider();
                    }
                } else {
                    if (isMobile) {
                        if (homeSlider) {}

                        if (homeCloud) {
                            homeSlider.kill();
                            homeSlider = null;
                        }
                        isMobile = false;
                    }
                }
            };

            window.addEventListener("resize", homeSliderResizeHandler);
        });
    </script>
@endpush
