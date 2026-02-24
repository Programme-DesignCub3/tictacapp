@props(['bg' => null])
<x-layouts.app>
    <div
        {{ $attributes->merge(['class' => 'relative flex-1 flex-col before:left-0 before:top-0 before:-z-10 before:inline-block before:h-full before:w-full before:bg-no-repeat before:bg-size-[70%_auto] before:bg-bottom-right before:fixed ' . $bg]) }}>
        <div
            class="before:bg-linear-to-t before:from-tictac-primary-blue before:bg-bottom-right before:fixed before:left-0 before:top-0 before:-z-10 before:inline-block before:h-full before:w-full before:to-transparent before:to-50%">
            {{ $slot }}</div>
    </div>
</x-layouts.app>
