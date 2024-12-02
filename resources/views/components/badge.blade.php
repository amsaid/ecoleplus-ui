<span {{ $attributes->merge(['class' => $classes()]) }}>
    @if($dot)
        <span class="{{ $dotClasses() }} mr-1.5"></span>
    @endif
    {{ $slot }}
</span> 