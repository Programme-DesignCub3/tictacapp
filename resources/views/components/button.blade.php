@props(['selected' => false])
<button @class(['font-cocogoose category-button', 'selected' => $selected]) {{ $attributes }}>
    {{ $slot }}
</button>
