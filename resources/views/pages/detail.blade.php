@use('Filament\Forms\Components\RichEditor\RichContentRenderer')
@use('App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks\YoutubeBlock')

<x-layouts.tictack class="before:bg-[url('../assets/bg/detail-bg-island.png')]">


    <div class="max-w-384 mx-auto">
        <x-breadcrumb :links="[
            [
                'label' => $type,
                'url' => route(strtolower($type) . '.index'),
            ],
            [
                'label' => $article->title,
                'url' => route('tictalks.show', ['article' => $article->slug]),
            ],
        ]" />

        <section class="clamp-[gap,4,8] clamp-[mt,4,8] mx-4 flex flex-col">
            <h1 class="clamp-[text,xl,3xl] font-poppins font-bold text-[#1e246f]">
                {{ $article->title }}
            </h1>

            <div class='overflow-hidden'>
                <img class="w-full" src="{{ $article->getFirstMediaUrl('thumbnail') }}" alt="">
            </div>

            <div class="prose max-w-none text-white">
                {{-- {!! RichContentRenderer::make($article->content)->customBlocks([YoutubeBlock::class])->toHtml() !!} --}}
                {!! $article->content !!}
                {{-- {!! $article->renderRichContent('content') !!} --}}
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

        <div>
            <h2 class="font-poppins font-bold text-[#1e246f] text-center clamp-[text,xl,2xl] clamp-[mb,2,4] my">Cek
                Artikel Lainnya</h2>

            <div class="gap-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3">
                @foreach ($otherArticles as $item)
                    <x-slider.sliderItem :item="$item" :routeName="strtolower($type)" />
                @endforeach
            </div>

        </div>

    </div>
</x-layouts.tictack>
