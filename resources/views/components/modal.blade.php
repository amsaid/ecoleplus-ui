@props(['open' => false])

<div x-data="{ open: @js($open) }">
    {{-- Trigger --}}
    @isset($trigger)
        <div @click="open = true">
            {{ $trigger }}
        </div>
    @endisset

    {{-- Modal --}}
    <div x-show="open"
        x-cloak
        @keydown.escape.window="open = false"
        class="relative z-50"
        aria-labelledby="modal-title"
        role="dialog"
        aria-modal="true">

        {{-- Backdrop --}}
        <div x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        {{-- Modal Panel --}}
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    @click.away="open = false"
                    {{ $attributes->merge(['class' => $classes()]) }}>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
