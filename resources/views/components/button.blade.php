<button 
    {{ $attributes->merge([
        'type' => $type,
        'class' => $classes(),
        'disabled' => $disabled,
    ]) }}
>
    @if($attributes->has('icon-left'))
        <x-dynamic-component 
            :component="$attributes->get('icon-left')" 
            class="{{ config('ecoleplus-ui.icons.class') }} -ml-1 mr-2"
        />
    @endif

    {{ $slot }}

    @if($attributes->has('icon-right'))
        <x-dynamic-component 
            :component="$attributes->get('icon-right')" 
            class="{{ config('ecoleplus-ui.icons.class') }} -mr-1 ml-2"
        />
    @endif
</button> 