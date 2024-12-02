<div {{ $attributes->merge(['class' => $classes()]) }}>
    <div class="relative">
        <div class="overflow-hidden rounded-full bg-gray-200">
            <div
                class="{{ $barClasses() }}"
                style="width: {{ $value }}%"
                role="progressbar"
                aria-valuenow="{{ $value }}"
                aria-valuemin="0"
                aria-valuemax="100"
            ></div>
        </div>

        @if($showValue)
            <div class="{{ $labelClasses() }}">
                {{ $value }}%
            </div>
        @endif
    </div>
</div> 