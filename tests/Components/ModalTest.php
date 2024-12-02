<?php

namespace Ecoleplus\EcoleplusUi\Tests\Components;

class ModalTest extends TestCase
{
    /** @test */
    public function it_renders_modal_with_default_size()
    {
        $expected = <<<'HTML'
            <div x-data="{ open: false }" class="inline-block">
                <div @click="open = true">
                    <button>Open Modal</button>
                </div>
                <template x-teleport="body">
                    <div x-show="open" x-cloak @keydown.escape.window="open = false" class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center p-0 sm:p-4">
                                <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" @click.away="open = false" class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all dark:bg-gray-800 w-full max-w-[90vw] sm:my-8 sm:w-full sm:p-6 sm:max-w-lg">
                                    <div>Modal Content</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            HTML;

        $this->assertComponentRenders($expected,
            '<x-ecp-modal>
                <x-slot:trigger>
                    <button>Open Modal</button>
                </x-slot:trigger>
                <div>Modal Content</div>
            </x-ecp-modal>'
        );
    }

    /** @test */
    public function it_renders_modal_with_custom_size()
    {
        $expected = <<<'HTML'
            <div x-data="{ open: false }" class="inline-block">
                <div @click="open = true">
                    <button>Open Modal</button>
                </div>
                <template x-teleport="body">
                    <div x-show="open" x-cloak @keydown.escape.window="open = false" class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center p-0 sm:p-4">
                                <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" @click.away="open = false" class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all dark:bg-gray-800 w-full max-w-[90vw] sm:my-8 sm:w-full sm:p-6 sm:max-w-xl">
                                    <div>Modal Content</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            HTML;

        $this->assertComponentRenders($expected,
            '<x-ecp-modal size="lg">
                <x-slot:trigger>
                    <button>Open Modal</button>
                </x-slot:trigger>
                <div>Modal Content</div>
            </x-ecp-modal>'
        );
    }

    /** @test */
    public function it_renders_modal_with_initial_open_state()
    {
        $expected = <<<'HTML'
            <div x-data="{ open: true }" class="inline-block">
                <div @click="open = true">
                    <button>Open Modal</button>
                </div>
                <template x-teleport="body">
                    <div x-show="open" x-cloak @keydown.escape.window="open = false" class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center p-0 sm:p-4">
                                <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" @click.away="open = false" class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all dark:bg-gray-800 w-full max-w-[90vw] sm:my-8 sm:w-full sm:p-6 sm:max-w-lg">
                                    <div>Modal Content</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            HTML;

        $this->assertComponentRenders($expected,
            '<x-ecp-modal :open="true">
                <x-slot:trigger>
                    <button>Open Modal</button>
                </x-slot:trigger>
                <div>Modal Content</div>
            </x-ecp-modal>'
        );
    }
}
