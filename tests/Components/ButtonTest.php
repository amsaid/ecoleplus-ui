<?php

namespace EcolePlus\EcolePlusUi\Tests\Components;

use EcolePlus\EcolePlusUi\Tests\TestCase;
use Illuminate\Support\Facades\Blade;

test('button component can be rendered', function () {
    $view = Blade::render('<x-eplus::button class="custom">Click me</x-eplus::button>');

    expect($view)
        ->toContain('button')
        ->toContain('eplus-btn')
        ->toContain('custom');
});

test('button component accepts type attribute', function () {
    $view = Blade::render('<x-eplus::button type="submit">Submit</x-eplus::button>');

    expect($view)
        ->toContain('type="submit"');
});

test('button component accepts variant attribute', function () {
    $view = Blade::render('<x-eplus::button variant="secondary">Click me</x-eplus::button>');

    expect($view)
        ->toContain('eplus-btn-secondary');
});

test('button component can be disabled', function () {
    $view = Blade::render('<x-eplus::button disabled>Click me</x-eplus::button>');

    expect($view)
        ->toContain('disabled')
        ->toContain('opacity-50')
        ->toContain('cursor-not-allowed');
});

test('button component accepts left icon', function () {
    $view = Blade::render('<x-eplus::button icon-left="heroicon-o-plus">Click me</x-eplus::button>');

    expect($view)
        ->toContain('heroicon-o-plus')
        ->toContain('-ml-1 mr-2');
});

test('button component accepts right icon', function () {
    $view = Blade::render('<x-eplus::button icon-right="heroicon-o-arrow-right">Click me</x-eplus::button>');

    expect($view)
        ->toContain('heroicon-o-arrow-right')
        ->toContain('-mr-1 ml-2');
});

test('button component merges attributes', function () {
    $view = Blade::render('<x-eplus::button class="custom-class" data-test="button">Click me</x-eplus::button>');

    expect($view)
        ->toContain('custom-class')
        ->toContain('data-test="button"');
}); 