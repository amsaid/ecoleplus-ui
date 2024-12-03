<?php

namespace EcolePlus\EcolePlusUi\Components;

use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    protected function mergeClasses(...$classes): string
    {
        return collect($classes)
            ->filter()
            ->map(fn ($class) => is_array($class) ? implode(' ', $class) : $class)
            ->implode(' ');
    }
} 