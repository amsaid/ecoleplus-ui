<span {{ $attributes->merge(['class' => $baseClasses]) }}>
    @if($svg)
        {!! $svg !!}
    @else
        <x-dynamic-component :component="$iconName" />
    @endif
</span>
