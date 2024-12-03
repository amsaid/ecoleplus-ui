<div
    x-show="selected === '{{ $name }}'"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 translate-y-1"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-1"
    role="tabpanel"
    id="tab-panel-{{ $name }}"
    aria-labelledby="tab-{{ $name }}"
    x-cloak
    {{ $attributes->merge(['class' => $baseClasses]) }}
>
    {{ $slot }}
</div>
