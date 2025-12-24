@props([
    'home' => route('home'),
    'links' => [], // [['label' => '', 'url' => '']]
])

<nav {{ $attributes->merge(['class' => 'inline-flex']) }} aria-label="Breadcrumb">
    <ol class="flex items-center gap-2 text-white" role="list">
        <li>
            <div>
                <a class="ml-4 text-sm font-bold" href="{{ $home }}">
                    HOME
                </a>
            </div>
        </li>

        @foreach ($links as $link)
            <li>
                <div class="flex items-center">
                    <svg class="size-5 shrink-0" data-slot="icon" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>

                    <a class="ml-1 text-sm font-medium" href="{{ $link['url'] ?? '#' }}"
                        @if ($loop->last) aria-current="page" @endif>
                        {{ $link['label'] }}
                    </a>
                </div>
            </li>
        @endforeach
    </ol>
</nav>
