<div
    :id="@js($id) + '-panel'"
    role="tabpanel"
    :aria-labelledby="@js($id)"
    x-show="isSelected(@js($id))"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
>
    {{ $slot }}
</div> 