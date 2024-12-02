@props([
    'type' => 'text',
    'value' => null,
    'placeholder' => null,
    'label' => null,
    'error' => null,
    'help' => null,
    'prefix' => null,
    'suffix' => null,
    'rows' => 3,
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

        @if($type === 'textarea')
            <textarea
                {{ $attributes->merge(['class' => $classes()]) }}
                rows="{{ $rows }}"
                placeholder="{{ $placeholder }}"
            >{{ $value }}</textarea>
        @elseif($type === 'file')
            <input
                type="file"
                {{ $attributes->merge(['class' => $classes()]) }}
            />
        @else
            <input
                type="{{ $type }}"
                value="{{ $value }}"
                placeholder="{{ $placeholder }}"
                {{ $attributes->merge(['class' => $classes()]) }}
            />
        @endif

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
