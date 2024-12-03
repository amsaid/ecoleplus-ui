<button
    id="tab-{{ $name }}"
    @click="selected = '{{ $name }}'"
    :class="[
        '{{ $baseClasses }}',
        selected === '{{ $name }}'
            ? '{{ $component->getDefaultClasses("tabs.tab.styles.{$component->closest('ecp-tabs')->style}", 'active') }}'
            : '{{ $component->getDefaultClasses("tabs.tab.styles.{$component->closest('ecp-tabs')->style}", 'inactive') }}'
    ]"
    role="tab"
    aria-controls="tab-panel-{{ $name }}"
    :aria-selected="selected === '{{ $name }}'"
    :tabindex="selected === '{{ $name }}' ? 0 : -1"
    {{ $attributes }}
>
    @if($icon && $iconPosition === 'left')
        <x-ecp-icon :name="$icon" class="w-5 h-5 mr-2" />
    @endif

    {{ $slot }}

    @if($icon && $iconPosition === 'right')
        <x-ecp-icon :name="$icon" class="w-5 h-5 ml-2" />
    @endif
</button>
