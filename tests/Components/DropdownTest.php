<?php

namespace EcolePlus\EcolePlusUi\Tests\Components;

use EcolePlus\EcolePlusUi\Tests\TestCase;
use Illuminate\Support\Facades\Blade;

test('dropdown component can be rendered', function () {
    $view = Blade::render('
        <x-eplus::dropdown>
            <x-slot:trigger>
                <button>Dropdown</button>
            </x-slot:trigger>
            <x-slot:content>
                Content
            </x-slot:content>
        </x-eplus::dropdown>
    ');

    expect($view)
        ->toContain('button')
        ->toContain('Content')
        ->toContain('x-data="{ open: false }"');
});

test('dropdown component accepts different alignments', function ($align, $classes) {
    $view = Blade::render('
        <x-eplus::dropdown align="' . $align . '">
            <x-slot:trigger>
                <button>Dropdown</button>
            </x-slot:trigger>
            <x-slot:content>
                Content
            </x-slot:content>
        </x-eplus::dropdown>
    ');

    expect($view)->toContain($classes);
})->with([
    ['left', 'origin-top-left left-0'],
    ['right', 'origin-top-right right-0'],
    ['top', 'origin-top'],
]);

test('dropdown component accepts different widths', function ($width, $class) {
    $view = Blade::render('
        <x-eplus::dropdown width="' . $width . '">
            <x-slot:trigger>
                <button>Dropdown</button>
            </x-slot:trigger>
            <x-slot:content>
                Content
            </x-slot:content>
        </x-eplus::dropdown>
    ');

    expect($view)->toContain($class);
})->with([
    ['48', 'w-48'],
    ['96', 'w-96'],
]); 