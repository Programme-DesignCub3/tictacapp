<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/product.js', 'resources/js/sliderProduct.js'])
    @endpush

    <section class="max-w-384 mx-auto">
        <div class="mb-28">
            <x-breadcrumb :links="[['label' => 'TicTacStation', 'url' => route('tictacstation')]]" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2" x-data="{
            productList: {{ json_encode($products) }},
            currentProduct: null,
            handleProductChange(id) {
                const product = this.productList.find(product => product.id === id);
                this.currentProduct = product ? product : this.productList[0];
            },
            init() {
                this.handleProductChange(1);
                productSlide.on('transitionEnd', () => { this.handleProductChange(productSlide.realIndex + 1) });
            }
        }">


            <div class="flex flex-col gap-y-8 text-white">

                <div>
                    <img src="{{ asset('img/product_placeholder/product-headline-1.png') }}"
                        alt="Enjoy out tic-tac selections">
                </div>

                <div class="before:bg-(--title-bg-color) relative flex items-center justify-start rounded-lg px-4 py-8 before:absolute before:-z-10 before:-ml-[10%] before:size-full before:w-[135%] before:rounded-2xl before:sm:-ml-[45%] before:lg:-ml-[45%]"
                    :style="`--title-bg-color: ${currentProduct.color}`">
                    <div class="flex max-w-[90%] flex-col gap-y-2">
                        <h2 class="text-3xl font-bold" x-text="currentProduct.name"></h2>
                        <p class="text-xl" x-text="currentProduct.specifications"></p>
                    </div>
                </div>
                <div class="md:max-w-3/5 p-4" x-text="currentProduct.description"></div>
            </div>

            <div class="">
                <x-slider.sliderProduct id="productSlider" :items="$products" />
            </div>
        </div>
    </section>

</x-layouts.app>
