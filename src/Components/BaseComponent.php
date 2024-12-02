<?php

namespace Ecoleplus\EcoleplusUi\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;

abstract class BaseComponent extends Component
{
    /**
     * The default classes for the component.
     *
     * @var array
     */
    protected $defaultClasses = [];

    /**
     * Additional classes to merge with the default classes.
     *
     * @var array
     */
    protected $classes = [];

    /**
     * Get the default classes for a specific element from the config.
     */
    protected function getDefaultClasses(string $component, string $element = 'base'): string
    {
        return config("ecoleplus-ui.defaults.{$component}.{$element}", '');
    }

    /**
     * Merge the given classes with the default classes.
     *
     * @param  string|array  $classes
     */
    protected function mergeClasses($classes): string
    {
        if (is_string($classes)) {
            $classes = explode(' ', $classes);
        }

        return implode(' ', array_unique(array_filter(
            array_merge($this->defaultClasses, (array) $classes)
        )));
    }

    /**
     * Get a configuration value.
     *
     * @param  mixed  $default
     * @return mixed
     */
    protected function config(string $key, $default = null)
    {
        return config("ecoleplus-ui.{$key}", $default);
    }

    /**
     * Get the color classes for a variant.
     */
    protected function getColorClasses(string $variant, string $component): string
    {
        return $this->getDefaultClasses($component, $variant);
    }

    /**
     * Get the size classes.
     */
    protected function getSizeClasses(string $size, array $sizes): string
    {
        return $sizes[$size] ?? $sizes['md'] ?? '';
    }

    /**
     * Determine if a given class exists in the class list.
     */
    protected function hasClass(string $class): bool
    {
        return Str::contains($this->classes, $class);
    }

    /**
     * Add a class or array of classes to the component.
     *
     * @param  string|array  $classes
     * @return $this
     */
    public function addClass($classes)
    {
        $this->classes = array_merge(
            $this->classes,
            is_array($classes) ? $classes : explode(' ', $classes)
        );

        return $this;
    }

    /**
     * Remove a class or array of classes from the component.
     *
     * @param  string|array  $classes
     * @return $this
     */
    public function removeClass($classes)
    {
        $remove = is_array($classes) ? $classes : explode(' ', $classes);
        $this->classes = array_diff($this->classes, $remove);

        return $this;
    }

    /**
     * Get an attribute's value from the component.
     *
     * @param  mixed  $default
     * @return mixed
     */
    protected function getAttribute(string $key, $default = null)
    {
        return Arr::get($this->attributes->getAttributes(), $key, $default);
    }

    /**
     * Determine if the component has the given attribute.
     */
    protected function hasAttribute(string $key): bool
    {
        return $this->attributes->has($key);
    }
}
