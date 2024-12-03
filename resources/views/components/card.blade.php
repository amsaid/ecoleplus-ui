@props([
    'header' => null,
    'footer' => null,
    'padding' => true,
    'shadow' => true,
])

<div {{ 
    $attributes->merge([
        'class' => 'bg-white rounded-lg border border-gray-200' . 
            ($shadow ? ' shadow-sm' : '')
    ]) 
}}>
    @if($header)
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            {{ $header }}
        </div>
    @endif

    <div class="{{ $padding ? 'p-4 sm:p-6' : '' }}">
        {{ $slot }}
    </div>

    @if($footer)
        <div class="px-4 py-4 sm:px-6 border-t border-gray-200">
            {{ $footer }}
        </div>
    @endif
</div> 