<div
    x-data="{ 
        show: true,
        init() {
            @if($duration)
                setTimeout(() => this.show = false, {{ $duration }})
            @endif
        }
    }"
    x-show="show"
    x-transition:enter="transform ease-out duration-300 transition"
    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    {{ $attributes->merge(['class' => $classes()]) }}
    role="alert"
>
    <div class="p-4">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                @if($type === 'success')
                    <x-heroicon-o-check-circle class="{{ $iconClasses() }}" />
                @elseif($type === 'error')
                    <x-heroicon-o-x-circle class="{{ $iconClasses() }}" />
                @elseif($type === 'warning')
                    <x-heroicon-o-exclamation-triangle class="{{ $iconClasses() }}" />
                @else
                    <x-heroicon-o-information-circle class="{{ $iconClasses() }}" />
                @endif
            </div>
            <div class="ml-3 w-0 flex-1 pt-0.5">
                {{ $slot }}
            </div>
            @if($dismissible)
                <div class="ml-4 flex flex-shrink-0">
                    <button
                        type="button"
                        class="inline-flex rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary-500"
                        @click="show = false"
                    >
                        <span class="sr-only">Close</span>
                        <x-heroicon-o-x-mark class="h-5 w-5" />
                    </button>
                </div>
            @endif
        </div>
    </div>
</div> 