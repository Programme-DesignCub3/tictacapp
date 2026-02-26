<x-layouts.tictack class="before:bg-[url('../assets/bg/detail-bg-island.png')]">
    <div class="max-w-384 mx-auto">
        <x-breadcrumb :links="[
            [
                'label' => $type,
                'url' => route(strtolower($type) . '.index'),
            ],
            [
                'label' => $article->category->name,
                'url' => route(strtolower($type) . '.index', ['category' => $article->category->slug]),
            ],
        ]" />

        <section class="clamp-[gap,4,8] clamp-[mt,4,8] mx-4 flex flex-col">
            <h1 class="clamp-[text,xl,3xl] font-poppins font-bold text-[#1e246f]">
                {{ $article->title }}
            </h1>

            <div class='overflow-hidden'>
                <img class="w-full" src="{{ $article->getFirstMediaUrl('thumbnail') }}" alt="">
            </div>

            <div class="prose text-white">
                {!! $article->content !!}
            </div>

            <div class="flex flex-wrap items-center gap-4 text-white">
                <p>Tags:</p>
                @foreach ($article->tags()->get() as $tag)
                    <div class="bg-card-shadow inline-block w-fit rounded-full px-6 py-1 text-white">
                        {{ $tag->name }}
                    </div>
                @endforeach
            </div>
        </section>

        <div class="clamp-[mt,12,18] clamp-[mb,4,8] inline-block h-full min-h-0.5 w-full self-stretch bg-white"></div>

        <div>
            <h2 class="clamp-[text,xl,2xl] clamp-[mb,4,8] my font-poppins text-center font-bold text-[#1e246f]">Cek
                Artikel Lainnya</h2>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($otherArticles as $item)
                    <x-slider.sliderItem :item="$item" :routeName="strtolower($type)" />
                @endforeach
            </div>

        </div>

    </div>
</x-layouts.tictack>
