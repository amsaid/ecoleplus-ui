@props([
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'md',
    'disabled' => false,
])

@php
    $config = config('ecoleplus-ui.components.button');
    $classes = collect([$config['base'], $config[$variant] ?? ''])
        ->filter()
        ->join(' ');
@endphp

<button 
    {{ $attributes->merge([
        'type' => $type,
        'class' => $classes,
        'disabled' => $disabled,
    ])->class([
        'opacity-50 cursor-not-allowed' => $disabled,
    ]) }}
>
    @if($attributes->has('icon-left'))
        <x-dynamic-component 
            :component="$attributes->get('icon-left')" 
            :class="config('ecoleplus-ui.icons.class')"
            class="-ml-1 mr-2"
        />
    @endif

    {{ $slot }}

    @if($attributes->has('icon-right'))
        <x-dynamic-component 
            :component="$attributes->get('icon-right')" 
            :class="config('ecoleplus-ui.icons.class')"
            class="-mr-1 ml-2"
        />
    @endif
</button> 