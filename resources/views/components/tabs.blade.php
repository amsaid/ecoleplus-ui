<div
    x-data="{
        selected: '{{ $selected }}',
        init() {
            @if($urlHash)
            this.selected = window.location.hash.substring(1) || '{{ $selected }}';
            this.$watch('selected', value => {
                history.pushState(null, null, value ? `#${value}` : ' ');
            });
            @endif
        }
    }"
    {{ $attributes->merge(['class' => $baseClasses]) }}
>
    <div
        role="tablist"
        class="{{ $listClasses }}"
        @keydown.right.prevent="$focus.wrap().next()"
        @keydown.left.prevent="$focus.wrap().previous()"
        @keydown.home.prevent="$focus.first()"
        @keydown.end.prevent="$focus.last()"
    >
        {{ $tabs }}
    </div>

    <div class="relative">
        {{ $slot }}
    </div>

    @if($lazy)
        <div
            x-show="$store.tabsLoading.isLoading"
            x-cloak
            class="absolute inset-0 flex items-center justify-center bg-white/50"
        >
            <x-ecp-spinner />
        </div>
    @endif
</div>
