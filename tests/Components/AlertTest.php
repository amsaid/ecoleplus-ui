<?php

namespace EcolePlus\EcolePlusUi\Tests\Components;

use EcolePlus\EcolePlusUi\Tests\TestCase;
use Illuminate\Support\Facades\Blade;

test('alert component can be rendered', function () {
    $view = Blade::render('<x-eplus::alert class="custom">Alert message</x-eplus::alert>');

    expect($view)
        ->toContain('eplus-alert')
        ->toContain('custom');
});

test('alert component accepts different types', function ($type, $iconClass) {
    $view = Blade::render("<x-eplus::alert type=\"{$type}\">Alert message</x-eplus::alert>");

    expect($view)
        ->toContain("eplus-alert-{$type}")
        ->toContain('h-5 w-5')
        ->toContain($iconClass);
})->with([
    ['info', 'text-blue-400'],
    ['success', 'text-green-400'],
    ['warning', 'text-yellow-400'],
    ['error', 'text-red-400'],
]);

test('alert component shows title when provided', function () {
    $view = Blade::render('<x-eplus::alert title="Important!">Alert message</x-eplus::alert>');

    expect($view)
        ->toContain('Important!')
        ->toContain('font-medium');
});

test('alert component can be dismissible', function () {
    $view = Blade::render('<x-eplus::alert dismissible>Alert message</x-eplus::alert>');

    expect($view)
        ->toContain('x-data="{ show: true }"')
        ->toContain('@click="show = false"')
        ->toContain('Dismiss');
});

test('alert component merges attributes', function () {
    $view = Blade::render('<x-eplus::alert class="custom-class" data-test="alert">Alert message</x-eplus::alert>');

    expect($view)
        ->toContain('custom-class')
        ->toContain('data-test="alert"');
}); 