<?php

namespace EcolePlus\EcolePlusUi\Tests\Components;

use EcolePlus\EcolePlusUi\Tests\TestCase;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\MessageBag;

test('input component can be rendered', function () {
    $view = Blade::render('<x-eplus::input name="test" class="custom" />');

    expect($view)
        ->toContain('input')
        ->toContain('name="test"')
        ->toContain('eplus-input')
        ->toContain('custom');
});

test('input component shows label when provided', function () {
    $view = Blade::render('<x-eplus::input name="email" label="Email Address" />');

    expect($view)
        ->toContain('label')
        ->toContain('Email Address')
        ->toContain('eplus-input-label');
});

test('input component shows hint when provided', function () {
    $view = Blade::render('<x-eplus::input name="email" :hint="\'We will never share your email.\'" />');

    expect($view)
        ->toContain('We will never share your email.')
        ->toContain('text-sm text-gray-500');
});

test('input component shows error state', function () {
    $view = Blade::render('<x-eplus::input name="email" error />');

    expect($view)
        ->toContain('eplus-input-error');
});

test('input component shows icon when provided', function () {
    $view = Blade::render('<x-eplus::input name="email" icon="heroicon-o-envelope" />');

    expect($view)
        ->toContain('heroicon-o-envelope')
        ->toContain('text-gray-400');
});

test('input component accepts different types', function () {
    $view = Blade::render('<x-eplus::input name="password" type="password" />');

    expect($view)
        ->toContain('type="password"');
});

test('input component shows validation error message', function () {
    $errors = new ViewErrorBag;
    $messageBag = new MessageBag;
    $messageBag->add('email', 'The email field is required.');
    $errors->put('default', $messageBag);

    View::share('errors', $errors);

    $view = Blade::render('<x-eplus::input name="email" />');

    expect($view)
        ->toContain('The email field is required.')
        ->toContain('text-red-600');
});

test('input component merges attributes', function () {
    $view = Blade::render('<x-eplus::input name="test" class="custom-class" data-test="input" />');

    expect($view)
        ->toContain('custom-class')
        ->toContain('data-test="input"');
}); 