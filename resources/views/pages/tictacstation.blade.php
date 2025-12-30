<x-layouts.app>
    @push('plugin-scripts')
        @vite(['resources/js/sliderProduct.js'])
    @endpush

    <section class="max-w-384 mx-auto">
        <div class="mb-28">
            <x-breadcrumb :links="[['label' => 'Tictalks', 'url' => route('tictalks')]]" />
        </div>

        @php
            $products = [
                ['label' => 'Rasa Original', 'id' => 1, 'color' => 'before:bg-[#fe6b00]'],
                ['label' => 'Rasa Pedas', 'id' => 2, 'color' => 'before:bg-[#d5343c]'],
                ['label' => 'Rasa Rumput Laut', 'id' => 3, 'color' => 'before:bg-[#1e2671]'],
                ['label' => 'Rasa Sapi Panggang', 'id' => 4, 'color' => 'before:bg-[#3f1710]'],
                ['label' => 'Rasa Ayam Bawang', 'id' => 5, 'color' => 'before:bg-[#a44299]'],
            ];
        @endphp

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
                    <img src="{{ asset('img/product_placeholder/product-headline.png') }}"
                        alt="Enjoy out tic-tac selections">
                </div>
                <div class="relative flex items-center justify-start rounded-lg px-4 py-8 before:absolute before:-z-10 before:-ml-[10%] before:size-full before:rounded-2xl before:lg:-ml-[45%]"
                    :class="currentProduct.color">
                    <div class="flex flex-col gap-y-2">
                        <h2 class="text-3xl font-bold" x-text="currentProduct.label"></h2>
                        <p class="text-xl">Available in 2 sizes :<span class="font-bold"> 14g & 45g </span></p>
                    </div>
                </div>
                <div class="md:max-w-3/5 p-4">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos aspernatur corporis quisquam
                        minus, cupiditate distinctio neque aut sequi illo consequatur quas nisi rerum sapiente ipsum
                        deleniti! Expedita amet provident maiores.
                    </p>
                </div>
            </div>

            <div class="">
                <x-slider.sliderProduct id="productSlider" :items="[
                    ['label' => 'Rasa Original', 'id' => 1],
                    ['label' => 'Rasa Pedas', 'id' => 2],
                    ['label' => 'Rasa Rumput Laut', 'id' => 3],
                    ['label' => 'Rasa BBQ', 'id' => 4],
                    ['label' => 'Rasa Ayam Bawang', 'id' => 5],
                ]" />
            </div>
        </div>
    </section>

</x-layouts.app>
