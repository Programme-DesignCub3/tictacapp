<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/product.js', 'resources/js/sliderProduct.js'])
    @endpush

    @push('custom-css')
        <link rel="preload" as="style" href="{{ Vite::asset('resources/css/swiper.css') }}" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" href="{{ Vite::asset('resources/css/swiper.css') }}">
        </noscript>
    @endpush

    <section class="mx-auto container">
        <div class="mb-28">
            <x-breadcrumb :links="[['label' => 'TicTacStation', 'url' => route('tictacstation')]]" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2" x-data="{
            productList: {{ json_encode($products) }},
            currentProduct: null,
            currentProductSlug: null,
            query: '',
            handleProductChange(id) {
                const product = this.productList.find(product => product.id === id);
                this.currentProduct = product ? product : this.productList[0];
                this.currentProductSlug = this.currentProduct.slug;
                this.setQuery(this.currentProductSlug);
            },
            readQuery() {
                const urlParams = new URLSearchParams(window.location.search);
                this.query = urlParams.get('product') || '';
                if (this.query) {
                    const product = this.productList.find(product => product.slug === this.query);
                    if (product) {
                        this.handleProductChange(product.id);
                        productSlide.slideTo(this.productList.indexOf(product));
                    } else {
                        let firstProduct = this.productList[0];
                        this.handleProductChange(firstProduct.id);
                        productSlide.slideTo(this.productList.indexOf(firstProduct));
                    }
                } else {
                    let firstProduct = this.productList[0];
                    this.handleProductChange(firstProduct.id);
                    productSlide.slideTo(this.productList.indexOf(firstProduct));
                }
            },
            setQuery(slug) {
                const url = new URL(window.location);
                url.searchParams.set('product', slug);
                window.history.pushState({}, '', url);
            },
            init() {
                this.readQuery();
                productSlide.on('transitionEnd', () => { this.handleProductChange(productSlide.realIndex + 1) });
            }
        }">

            <div class="z-1 flex flex-col gap-y-8 text-white" >
                <div>
                    <img src="{{ asset('img/product_placeholder/product-headline-1.png') }}"
                        alt="Enjoy our TicTac selections">
                </div>
                <div class="before:bg-(--title-bg-color) relative flex items-center justify-start rounded-lg px-4 py-8 before:absolute before:-z-10 before:-ml-[10%] before:size-full before:w-[135%] before:rounded-2xl before:sm:-ml-[45%] before:lg:-ml-[45%] before:transition-colors before:ease-fluid before:duration-500 before:delay-75"
                    :style="`--title-bg-color: ${currentProduct.color}`">
                    <div class="flex flex-col gap-y-2 max-w-[90%]">
                        <h2 class="font-bold text-3xl" x-text="currentProduct.name"></h2>
                        <p class="text-xl" x-text="currentProduct.specifications"></p>
                    </div>
                </div>
                <div class="p-4 md:max-w-3/5" x-text="currentProduct.description"></div>
            </div>

            <div class="">
                <x-slider.sliderProduct id="productSlider" :items="$products" />
            </div>
        </div>
    </section>

</x-layouts.app>
