@props([
    'name' => null,
    'id' => null,
    'label' => null,
    'hint' => null,
    'error' => null,
    'placeholder' => null,
    'options' => [],
])

@php
    $hasError = $error !== null;
    $id = $id ?? $name;
    
    $config = config('ecoleplus-ui.components.select');
    $baseClasses = $config['base'];
    $errorClasses = $config['error'];
    $labelClasses = $config['label'];
    $hintClasses = $config['hint'];
@endphp

<div>
    @if($label)
        <label for="{{ $id }}" class="{{ $labelClasses }}">
            {{ $label }}
        </label>
    @endif

    <select
        {{ $attributes->merge([
            'id' => $id,
            'name' => $name,
            'class' => $baseClasses . ($hasError ? ' ' . $errorClasses : '')
        ]) }}
    >
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif

        @foreach($options as $value => $label)
            <option value="{{ $value }}">{{ $label }}</option>
        @endforeach

        {{ $slot }}
    </select>

    @if($hint && !$hasError)
        <p class="{{ $hintClasses }}">{{ $hint }}</p>
    @endif

    @if($hasError)
        <p class="{{ $hintClasses }} text-red-600 dark:text-red-400">{{ $error }}</p>
    @endif
</div> 