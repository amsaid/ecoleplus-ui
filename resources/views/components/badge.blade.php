@props([
    'variant' => 'primary',
    'size' => 'md',
    'rounded' => true,
])

@php
    $variants = [
        'primary' => 'bg-blue-100 text-blue-800',
        'secondary' => 'bg-gray-100 text-gray-800',
        'success' => 'bg-green-100 text-green-800',
        'danger' => 'bg-red-100 text-red-800',
        'warning' => 'bg-yellow-100 text-yellow-800',
        'info' => 'bg-indigo-100 text-indigo-800',
    ];

    $sizes = [
        'sm' => 'px-2 py-0.5 text-xs',
        'md' => 'px-2.5 py-0.5 text-sm',
        'lg' => 'px-3 py-1 text-base',
    ];
@endphp

<span {{ 
    $attributes->merge([
        'class' => 
            $variants[$variant] . ' ' . 
            $sizes[$size] . ' ' .
            'inline-flex items-center font-medium' .
            ($rounded ? ' rounded-full' : ' rounded')
    ]) 
}}>
    {{ $slot }}
</span> 