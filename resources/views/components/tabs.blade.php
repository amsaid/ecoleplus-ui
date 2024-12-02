<div x-data="{
    selectedTab: null,
    init() {
        // Initialize with first tab
        this.$nextTick(() => {
            const firstTab = this.$refs.tabs.querySelector(&#34;[role='tab']&#34;)
            this.selectedTab = firstTab?.id
        })
    },
    isSelected(id) {
        return this.selectedTab === id
    },
    selectTab(id) {
        this.selectedTab = id
    }
}" {{ $attributes->merge(['class' => $classes()]) }}>
    {{-- Tab List --}}
    <div x-ref="tabs" role="tablist" class="flex {{ $listClasses() }}">
        {{ $tabs }}
    </div>

    {{-- Tab Panels --}}
    <div class="{{ $panelWrapperClasses() }}">
        {{ $panels }}
    </div>
</div>

@props(['style' => 'underline', 'orientation' => 'horizontal'])
