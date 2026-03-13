<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
        <div class="text-left">
            <h1 class="text-sm font-medium">Search Engine Optimization (SEO)</h1>
            <div class="mt-4 text-sm text-gray-600">
                Improve your rankings and see how your product page will appear in search engine results.
            </div>
        </div>
    </div>
</x-dynamic-component>
