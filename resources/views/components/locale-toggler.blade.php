<div class="flex items-center justify-between gap-2" x-data="{
    toggled: false,
    localeUrl: '{{ LaravelLocalization::getLocalizedURL(app()->getLocale() === 'id' ? 'en' : 'id', null, [], true) }}',
    toggleLocale() {
        if (!this.toggled) {
            this.toggled = true;
            setTimeout(() => {
                window.location.href = this.localeUrl
            }, 350);
        }
    }
}">
    <span>ID</span>
    <div class="hk-toggle">
        <input id="local-toggle" :disabled="toggled" @click="toggleLocale" type="checkbox"
            {{ app()->getLocale() === 'id' ? '' : 'checked' }}>
        <label for="local-toggle"></label>
    </div>
    <span>EN</span>
</div>
