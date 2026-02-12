@props(['bg'])
<x-layouts.app>
    <div
        {{ $attributes->merge(['class' => 'relative flex-1 flex-col before:absolute before:left-0 before:top-0 before:-z-10 before:inline-block before:h-full before:w-full before:bg-no-repeat before:bg-size-[70%_auto] before:bg-bottom-right ' . $bg]) }}>
        {{ $slot }}
    </div>
</x-layouts.app>
