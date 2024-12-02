<div
    id="{{ $id }}-panel"
    role="tabpanel"
    :aria-labelledby="'{{ $id }}'"
    x-show="isSelected('{{ $id }}')"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    {{ $attributes->merge(['class' => $classes()]) }}
>
    {{ $slot }}
</div> 