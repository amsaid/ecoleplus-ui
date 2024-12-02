<?php

namespace Ecoleplus\EcoleplusUi\Tests\Components;

class PopoverTest extends TestCase
{
    /** @test */
    public function it_renders_popover_with_trigger_and_content()
    {
        $expected = <<<'HTML'
            <div x-data="{ open: false }" class="relative inline-block">
                <div x-ref="trigger" @click="open = !open">
                    <button>Trigger</button>
                </div>
                <div x-ref="content" x-show="open" @click.away="open = false" x-anchor:bottom="$refs.trigger" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 p-4 bg-white rounded-lg shadow-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700" style="display: none;">
                    <p>Content</p>
                </div>
            </div>
            HTML;

        $this->assertComponentRenders($expected,
            '<x-ecp-popover>
                <x-slot:trigger>
                    <button>Trigger</button>
                </x-slot:trigger>
                <p>Content</p>
            </x-ecp-popover>'
        );
    }

    /** @test */
    public function it_renders_popover_with_custom_placement()
    {
        $expected = <<<'HTML'
            <div x-data="{ open: false }" class="relative inline-block">
                <div x-ref="trigger" @click="open = !open">
                    <button>Trigger</button>
                </div>
                <div x-ref="content" x-show="open" @click.away="open = false" x-anchor:top="$refs.trigger" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 p-4 bg-white rounded-lg shadow-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700" style="display: none;">
                    <p>Content</p>
                </div>
            </div>
            HTML;

        $this->assertComponentRenders($expected,
            '<x-ecp-popover placement="top">
                <x-slot:trigger>
                    <button>Trigger</button>
                </x-slot:trigger>
                <p>Content</p>
            </x-ecp-popover>'
        );
    }
}
