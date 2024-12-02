<div>
    @if($label)
        <label class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif

    <select
        {{ $attributes->merge([
            'class' => $getClasses(),
            'disabled' => $disabled
        ]) }}
    >
        @foreach($options as $value => $label)
            <option
                value="{{ $value }}"
                {{ $selected == $value ? 'selected' : '' }}
            >
                {{ $label }}
            </option>
        @endforeach
    </select>

    @if($error)
        <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>
