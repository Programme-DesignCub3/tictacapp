<x-layouts.app>
    <style>
        #game-wrapper {
            width: 550px;
            height: 880px;
            display: flex;
            justify-content: center;
            margin: auto;
            margin-bottom: 80px;
        }
    </style>

    <div class="px-4">
        <div
            class="before:bg-size-[100%_100%] before:absolute before:left-0 before:top-0 before:-z-10 before:inline-block before:h-full before:w-full before:bg-[url('../assets/bg/tictalks-bg.png')] before:bg-center before:bg-no-repeat">
            <div class="max-w-384 mx-auto">
                <div class="mb-4 flex flex-wrap justify-between gap-4">
                    <x-breadcrumb :links="[['label' => 'Game On', 'url' => route('gameon')]]" />
                    <div class="flex flex-wrap items-center gap-4 text-white">
                    </div>
                </div>

                <div id="game-wrapper">
                    <iframe src="https://tictacapp.democube.id/storage/games/tictac-catch/index.html" frameborder="0"
                        noresize="noresize" allow="geolocation 'self'; autoplay 'self'"
                        style="height: 100%; width: 100%; border: 0;"></iframe>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
