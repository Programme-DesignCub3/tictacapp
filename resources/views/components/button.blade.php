@props(['selected' => false])
<button @class([
    'font-passion font-bold category-button clamp-[text,sm,base]',
    'selected' => $selected,
]) {{ $attributes }}>
    {{ $slot }}
</button>
