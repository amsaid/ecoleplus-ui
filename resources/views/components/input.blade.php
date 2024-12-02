<div>
    @if($label)
        <label class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif

    <div class="relative">
        <input
            type="{{ $type }}"
            {{ $attributes->merge([
                'class' => $getClasses(),
                'disabled' => $disabled
            ]) }}
        >
    </div>

    @if($error)
        <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>
