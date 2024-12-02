<?php

namespace Ecoleplus\EcoleplusUi\Tests\Components;

use PHPUnit\Framework\TestCase;
use Ecoleplus\EcoleplusUi\Tests\ComponentTestCase;

class DropdownTest extends TestCase
{
    use ComponentTestCase;

    /** @test */
    public function it_renders_dropdown_with_default_width()
    {
        $expected = <<<'HTML'
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <div x-ref="trigger" @click="open = !open">
                    <button>Trigger</button>
                </div>
                <div x-ref="content" x-show="open" @click.away="open = false" x-anchor:bottom="$refs.trigger" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" class="absolute right-0 z-50 mt-2 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:bg-gray-800 dark:ring-gray-700 w-48" style="display: none;">
                    <div class="py-1">Menu items</div>
                </div>
            </div>
            HTML;

        $this->assertComponentRenders($expected, 
            '<x-ecp-dropdown>
                <x-slot:trigger>
                    <button>Trigger</button>
                </x-slot:trigger>
                <div class="py-1">Menu items</div>
            </x-ecp-dropdown>'
        );
    }

    /** @test */
    public function it_renders_dropdown_with_custom_width()
    {
        $expected = <<<'HTML'
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <div x-ref="trigger" @click="open = !open">
                    <button>Trigger</button>
                </div>
                <div x-ref="content" x-show="open" @click.away="open = false" x-anchor:bottom="$refs.trigger" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" class="absolute right-0 z-50 mt-2 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:bg-gray-800 dark:ring-gray-700 w-64" style="display: none;">
                    <div class="py-1">Menu items</div>
                </div>
            </div>
            HTML;

        $this->assertComponentRenders($expected, 
            '<x-ecp-dropdown width="64">
                <x-slot:trigger>
                    <button>Trigger</button>
                </x-slot:trigger>
                <div class="py-1">Menu items</div>
            </x-ecp-dropdown>'
        );
    }
}
