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
@endphp

<div>
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif

    <select
        {{ $attributes->merge([
            'id' => $id,
            'name' => $name,
            'class' => 'block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm' .
                ($hasError ? ' border-red-300 text-red-900 focus:border-red-500 focus:ring-red-500' : '')
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
        <p class="mt-2 text-sm text-gray-500">{{ $hint }}</p>
    @endif

    @if($hasError)
        <p class="mt-2 text-sm text-red-600">{{ $error }}</p>
    @endif
</div> 