<button
    :id="@js($id)"
    type="button"
    role="tab"
    :aria-selected="isSelected(@js($id))"
    :aria-controls="@js($id) + '-panel'"
    :class="{ '{{ $activeTabClasses() }}': isSelected(@js($id)), '{{ $tabClasses() }}': !isSelected(@js($id)) }"
    @click="selectTab(@js($id))"
>
    {{ $slot }}
</button> 