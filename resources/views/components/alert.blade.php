@props([
    'type' => 'info',
    'title' => null,
    'dismissible' => false,
])

@php
    $classes = collect(['eplus-alert', "eplus-alert-{$type}"])
        ->filter()
        ->join(' ');
@endphp

<div 
    x-data="{ show: true }" 
    x-show="show" 
    {{ $attributes->merge(['class' => $classes]) }}
>
    <div class="flex">
        <div class="flex-shrink-0">
            @if($type === 'info')
                <x-heroicon-o-information-circle class="h-5 w-5 text-blue-400"/>
            @elseif($type === 'success')
                <x-heroicon-o-check-circle class="h-5 w-5 text-green-400"/>
            @elseif($type === 'warning')
                <x-heroicon-o-exclamation-triangle class="h-5 w-5 text-yellow-400"/>
            @elseif($type === 'error')
                <x-heroicon-o-x-circle class="h-5 w-5 text-red-400"/>
            @endif
        </div>
        <div class="ml-3 w-full">
            @if($title)
                <h3 class="text-sm font-medium text-current">
                    {{ $title }}
                </h3>
            @endif

            <div class="text-sm text-current mt-2">
                {{ $slot }}
            </div>
        </div>

        @if($dismissible)
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button 
                        type="button" 
                        @click="show = false"
                        class="inline-flex rounded-md p-1.5 focus:outline-none focus:ring-2 focus:ring-offset-2"
                    >
                        <span class="sr-only">{{ __('Dismiss') }}</span>
                        <x-heroicon-o-x-mark class="h-5 w-5"/>
                    </button>
                </div>
            </div>
        @endif
    </div>
</div> 