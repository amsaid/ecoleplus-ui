@aware(['orientation'])

<button
    :id="@js($id)"
    type="button"
    role="tab"
    :aria-selected="isSelected(@js($id))"
    :aria-controls="@js($id) + '-panel'"
    :class="{ '{{ $activeTabClasses() }}': isSelected(@js($id)), '{{ $tabClasses() }}': !isSelected(@js($id)) }"
    @click="selectTab(@js($id))"
    @keydown.right.prevent="orientation !== 'vertical' && $el.nextElementSibling?.focus()"
    @keydown.left.prevent="orientation !== 'vertical' && $el.previousElementSibling?.focus()"
    @keydown.down.prevent="orientation === 'vertical' && $el.nextElementSibling?.focus()"
    @keydown.up.prevent="orientation === 'vertical' && $el.previousElementSibling?.focus()"
    @keydown.home.prevent="$el.parentElement.firstElementChild?.focus()"
    @keydown.end.prevent="$el.parentElement.lastElementChild?.focus()"
    @keydown.space.prevent="selectTab(@js($id))"
    @keydown.enter.prevent="selectTab(@js($id))"
>
    {{ $slot }}
</button> 