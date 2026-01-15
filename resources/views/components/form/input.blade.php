@props(['model', 'label' => $label ?? $model, 'type' => 'text'])

<div class="grid grid-cols-2 items-center justify-between gap-2">
    <label class="flex shrink-0 basis-1/4 justify-between gap-2" for="{{ $model }}">
        <span class="basis-1/4">{{ $label }}</span>
        <span>:</span>
    </label>
    <input class="border-tictac-primary-blue shrink border px-1 py-0.5" id="{{ $model }}"
        wire:model="{{ $model }}" type="{{ $type }}" name="{{ $model }}">
</div>
