@props([
    'type' => 'text',
    'label' => null,
    'error' => null,
    'help' => null,
    'prefix' => null,
    'suffix' => null,
])

<div>
    @if($label)
        <label class="{{ $labelClasses() }}">
            {{ $label }}
        </label>
    @endif

    <div class="{{ $wrapperClasses() }}">
        @if($prefix)
            <div class="{{ $prefixClasses() }}">
                {{ $prefix }}
            </div>
        @endif

        <input 
            type="{{ $type }}"
            {{ $attributes->merge(['class' => $classes()]) }}
        >

        @if($suffix)
            <div class="{{ $suffixClasses() }}">
                {{ $suffix }}
            </div>
        @endif
    </div>

    @if($help && !$error)
        <p class="{{ $helpClasses() }}">{{ $help }}</p>
    @endif

    @if($error)
        <p class="{{ $errorClasses() }}">{{ $error }}</p>
    @endif
</div>
