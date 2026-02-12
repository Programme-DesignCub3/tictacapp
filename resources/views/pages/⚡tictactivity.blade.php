<?php

use App\Models\Activity;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::tictack', ['bg' => "before:bg-[url('../assets/bg/tictactivity-bg-island.png')]"])] class extends Component
{
    use WithPagination;

    #[Url('category', except: 'all')]
    public string $selectedCategory = 'all';

    #[Computed]
    public function activities()
    {
        return Activity::with('category')
            ->when($this->selectedCategory !== 'all', function ($query) {
                return $query->whereRelation('category', 'slug', '=', $this->selectedCategory);
            })
            ->paginate(12);
    }

    #[Computed]
    public function categories()
    {
        return Activity::all()->pluck('category')->unique();
    }

    public function handleCategoryChange(?string $slug = null)
    {
        if ($slug) {
            if ($slug === $this->selectedCategory) {
                $this->selectedCategory = 'all';
            } else {
                $this->selectedCategory = $slug;
            }
        } else {
            $this->selectedCategory = 'all';
        }

        $this->dispatch('content-changed');
    }
};
?>

<div class="max-w-384 mx-auto px-4">
    @push('plugin-scripts')
    @vite(['resources/js/slider.js'])
    @endpush
    <div class="absolute left-[1%] top-[7%] z-0 w-[13vw] max-md:hidden">
        <div class="relative h-full w-full">
            <img class="cloud absolute h-auto w-auto" data-direction="right" data-speed="1"
                src="{{ asset('img/cloud.png') }}" alt="" style="width: 290px; height: auto;">
        </div>
    </div>

    <div class="mb-28 flex flex-wrap justify-between gap-4">
        <x-breadcrumb :links="[['label' => 'Tictactivity', 'url' => route('tictactivity')]]" />

        <div class="flex flex-wrap items-center gap-4 text-white">

            <x-button wire:click="handleCategoryChange">Semua</x-button>

            @foreach ($this->categories as $category)
            <x-button wire:click="handleCategoryChange('{{ $category->slug }}')">{{ $category->name }}</x-button>
            @endforeach

        </div>
    </div>

    <x-slider.slider id="activitySlider" :items="$this->activities" />
</div>

<script>
    let activitySlider;

    const initSlider = () => {
        activitySlider = new window.Swiper("#activitySlider", {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                // when window width is >= 320px
                425: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                // when window width is >= 480px
                720: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                // when window width is >= 640px
                1240: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
            scrollbar: {
                el: ".swiper-scrollbar",
                draggable: true,
                snapOnRelease: true,
            },
        });

        console.log('slider init')
    }

    initSlider();

    this.$on('content-changed', () => {

        activitySlider.destroy();

        initSlider();
    });
</script>
