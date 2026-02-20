@props(['selected' => false])
<button @class([
    'font-cocogoose category-button clamp-[text,sm,base]',
    'selected' => $selected,
]) {{ $attributes }}>
    {{ $slot }}
</button>
