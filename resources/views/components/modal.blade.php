<div class="flex justify-center">
    <!-- Trigger -->
    <span x-on:click="openAuth = true">
        {{ $trigger }}
    </span>

    <!-- Modal -->
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="openAuth" style="display: none"
        x-on:keydown.escape.prevent.stop="openAuth = false" role="dialog" aria-modal="true" x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')">
        <!-- Overlay -->
        <div class="fixed inset-0 bg-black/50 bg-opacity-50" x-show="openAuth" x-transition.opacity></div>

        <!-- Panel -->
        <div class="relative flex min-h-screen items-center justify-center p-4" x-show="openAuth" x-transition
            x-on:click="openAuth = false">
            <div class="relative" x-on:click.stop x-trap.noscroll.inert="openAuth">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
