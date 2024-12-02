@aware(['orientation'])

<button
    id="{{ $id }}"
    type="button"
    role="tab"
    :aria-selected="isSelected('{{ $id }}')"
    :aria-controls="'{{ $id }}' + '-panel'"
    :class="{ '{{ $activeTabClasses() }}': isSelected('{{ $id }}'), '{{ $tabClasses() }}': !isSelected('{{ $id }}') }"
    @click="selectTab('{{ $id }}')"
    @keydown.right.prevent="orientation !== 'vertical' && $el.nextElementSibling?.focus()"
    @keydown.left.prevent="orientation !== 'vertical' && $el.previousElementSibling?.focus()"
    @keydown.down.prevent="orientation === 'vertical' && $el.nextElementSibling?.focus()"
    @keydown.up.prevent="orientation === 'vertical' && $el.previousElementSibling?.focus()"
    @keydown.home.prevent="$el.parentElement.firstElementChild?.focus()"
    @keydown.end.prevent="$el.parentElement.lastElementChild?.focus()"
    @keydown.space.prevent="selectTab('{{ $id }}')"
    @keydown.enter.prevent="selectTab('{{ $id }}')"
>
    {{ $slot }}
</button> 