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

@pushOnce('components')
    @php
        $randomId = 'tab-'.uniqid();
    @endphp

    {{-- Tab Button Template --}}
    @template('tab-button')
        <button
            :id="id"
            type="button"
            role="tab"
            :aria-selected="isSelected(id)"
            :aria-controls="id + '-panel'"
            :class="{ '{{ $activeTabClasses() }}': isSelected(id), '{{ $tabClasses() }}': !isSelected(id) }"
            @click="selectTab(id)"
        >
            {{ $slot }}
        </button>
    @endtemplate

    {{-- Tab Panel Template --}}
    @template('tab-panel')
        <div
            :id="id + '-panel'"
            role="tabpanel"
            :aria-labelledby="id"
            x-show="isSelected(id)"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
        >
            {{ $slot }}
        </div>
    @endtemplate
@endPushOnce 