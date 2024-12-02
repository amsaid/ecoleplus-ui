<div x-data="{ 
    selectedTab: null,
    init() {
        // Initialize with first tab
        this.$nextTick(() => {
            const firstTab = this.$refs.tabs.querySelector('[role="tab"]')
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
    <div x-ref="tabs" role="tablist" class="flex {{ $orientation === 'vertical' ? 'flex-col' : '' }} gap-2">
        {{ $tabs }}
    </div>

    {{-- Tab Panels --}}
    <div class="mt-4">
        {{ $panels }}
    </div>
</div>

@aware(['orientation']) 