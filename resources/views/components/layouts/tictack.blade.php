<x-layouts.app>
    <div
        {{ $attributes->merge(['class' => 'before:bg-size-[70%_auto] before:bg-bottom-right relative flex flex-1 flex-col before:absolute before:left-0 before:top-0 before:-z-10 before:inline-block before:h-full before:w-full  before:bg-no-repeat']) }}>
        {{ $slot }}
    </div>

</x-layouts.app>
