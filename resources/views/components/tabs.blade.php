<div
    x-data="{
        selected: '{{ $selected }}',
        init() {
            @if($urlHash)
            // Initialize with URL hash if present
            this.selected = window.location.hash.substring(1) || '{{ $selected }}';

            // Update hash when tab changes
            this.$watch('selected', value => {
                history.pushState(null, null, value ? `#${value}` : ' ');
            });
            @endif
        }
    }"
    {{ $attributes->merge(['class' => $baseClasses]) }}
>
    {{-- Tabs Navigation --}}
    <div
        role="tablist"
        class="flex {{ $orientation === 'vertical' ? 'flex-col' : '' }} border-b border-gray-200"
        @keydown.right.prevent="$focus.wrap().next()"
        @keydown.left.prevent="$focus.wrap().previous()"
        @keydown.home.prevent="$focus.first()"
        @keydown.end.prevent="$focus.last()"
    >
        {{ $tabs }}
    </div>

    {{-- Tabs Content --}}
    <div class="relative">
        {{ $slot }}
    </div>

    {{-- Optional Loading Indicator --}}
    <div
        x-show="$store.tabsLoading.isLoading"
        x-cloak
        class="absolute inset-0 flex items-center justify-center bg-white/50"
    >
        <x-ecp-spinner />
    </div>
</div>
