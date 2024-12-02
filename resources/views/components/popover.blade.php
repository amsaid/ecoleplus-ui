@php
    $id = uniqid('popover-');
@endphp

<div x-data="{ open: false }" 
    {{ $attributes->merge(['class' => 'relative inline-block']) }}>
    
    {{-- Trigger --}}
    <div @click="open = !open" @click.away="open = false">
        {{ $trigger }}
    </div>

    {{-- Content --}}
    <div x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="{{ $classes() }}"
        style="display: none;">
        {{ $slot }}
    </div>
</div>
