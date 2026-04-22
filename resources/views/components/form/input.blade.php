@props(['model', 'label' => $label ?? $model, 'type' => 'text'])

<div wire:transition {{ $attributes }}>
    <div class="justify-between items-center gap-2 grid grid-cols-7">
        <div class="col-span-2">
            <label class="flex justify-between items-center gap-2 font-winky-sans font-semibold shrink-0 basis-1/4" for="{{ $model }}">
                <span class="basis-1/4">{{ $label }}</span>
                <span>:</span>
            </label>
        </div>
        <div class="col-span-5">
            {{-- Merge attributes --}}
            <input {{ $attributes->merge(['class' => 'px-2 py-1 border border-tictac-primary-blue rounded-xl focus:outline-none focus:ring-2 focus:ring-tictac-primary-blue w-full shrink']) }} id="{{ $model }}"
                wire:model="{{ $model }}" type="{{ $type }}" name="{{ $model }}">
        </div>
    </div>
    @error($model)
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</div>
