@props([
    'type' => 'text',
    'name' => null,
    'id' => null,
    'value' => null,
    'error' => false,
    'label' => null,
    'hint' => null,
])

@php
    $config = config('ecoleplus-ui.components.input');
    $classes = collect([$config['base']])
        ->filter()
        ->join(' ');
@endphp

<div>
    @if($label)
        <label 
            for="{{ $id ?? $name }}" 
            class="eplus-input-label block text-sm font-medium text-gray-700 mb-1"
        >
            {{ $label }}
        </label>
    @endif

    <div class="relative">
        <input 
            {{ $attributes->merge([
                'type' => $type,
                'name' => $name,
                'id' => $id ?? $name,
                'value' => $value,
            ])->class([
                $classes,
                'eplus-input-error' => $error || ($name && isset($errors) && $errors->has($name)),
            ]) }}
        />

        @if($attributes->has('icon'))
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <x-dynamic-component 
                    :component="$attributes->get('icon')" 
                    :class="config('ecoleplus-ui.icons.class')"
                    class="text-gray-400"
                />
            </div>
        @endif
    </div>

    @if($hint)
        <p class="mt-1 text-sm text-gray-500">{{ $hint }}</p>
    @endif

    @if($name && isset($errors) && $errors->has($name))
        <p class="mt-1 text-sm text-red-600">{{ $errors->first($name) }}</p>
    @endif
</div> 