<?php

use App\Models\GameScore;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

new #[Layout('layouts::tictack', ['bg' => "before:bg-[url('../assets/bg/tictalks-bg-island.png')]"])] class extends Component
{
    #[Computed()]
    public function scores()
    {
        return GameScore::with('user')->orderBy('score', 'desc')->take(5)->get();
    }

    #[On('game-end')]
    public function updateScore(int $score)
    {
        auth()->user()->score()->create(['score' => $score]);
    }
};
?>

<div class="max-w-384 mx-auto">

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

    <div class="mb-4 flex flex-wrap justify-between gap-4">
        <x-breadcrumb :links="[['label' => 'Game On', 'url' => route('gameon')]]" />
        <div class="flex flex-wrap items-center gap-4 text-white">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-[auto_30%] px-4">
        <div wire:ignore id="game-wrapper" class="">
            <iframe src="/storage/games/tictac-catch-new/index.html" frameborder="0" noresize="noresize"
                allow="geolocation 'self'; autoplay 'self'"
                style="height: 100%; width: 100%; border: 0;"></iframe>
        </div>
        <x-leaderboard :scoreList="$this->scores" />
    </div>


</div>

<script>
    window.updateScore = (score) => {
        this.$dispatchSelf('game-end', {
            score
        });
    }
</script>
