<div class="flex justify-center" x-data="{ open: false }">
    <!-- Trigger -->
    <span x-on:click="open = true">
        {{ $trigger }}
    </span>

    <!-- Modal -->
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="open" style="display: none"
        x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')">
        <!-- Overlay -->
        <div class="fixed inset-0 bg-black/50 bg-opacity-50" x-show="open" x-transition.opacity></div>

        <!-- Panel -->
        <div class="relative flex min-h-screen items-center justify-center p-4" x-show="open" x-transition
            x-on:click="open = false">
            <div class="relative" x-on:click.stop x-trap.noscroll.inert="open">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
