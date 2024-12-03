<div
    x-data="{
        selected: '{{ $selected }}',
        init() {
            // URL hash sync
            if ({{ $urlHash ? 'true' : 'false' }}) {
                this.selected = window.location.hash.substring(1) || '{{ $selected }}';
                this.$watch('selected', value => {
                    window.location.hash = value;
                });
            }
        }
    }"
    {{ $attributes->merge(['class' => $baseClasses]) }}
>
    {{-- Tabs Navigation --}}
    <div
        role="tablist"
        class="flex {{ $orientation === 'vertical' ? 'flex-col' : '' }}"
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
        x-show="loading"
        class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-50"
    >
        <x-ecp-spinner />
    </div>
</div>
