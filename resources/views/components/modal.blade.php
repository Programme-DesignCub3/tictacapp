@props(['model'])
<div class="flex justify-center">
    <!-- Trigger -->
    <span x-on:click="{{ $model }} = true">
        {{ $trigger }}
    </span>

    <!-- Modal -->
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="{{ $model }}" style="display: none"
        x-on:keydown.escape.prevent.stop="{{ $model }} = false" role="dialog" aria-modal="true"
        x-id="['modal-title']" :aria-labelledby="$id('modal-title')">
        <!-- Overlay -->
        <div class="fixed inset-0 bg-black/50 bg-opacity-50" x-show="{{ $model }}" x-transition.opacity></div>

        <!-- Panel -->
        <div class="relative flex min-h-screen items-center justify-center p-4" x-show="{{ $model }}"
            x-transition x-on:click="{{ $model }} = false">
            <div class="relative" x-on:click.stop x-trap.noscroll.inert="{{ $model }}">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
