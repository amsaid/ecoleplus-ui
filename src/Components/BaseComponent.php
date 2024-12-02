<?php

namespace Ecoleplus\EcoleplusUi\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
     *
     * @param string $component
     * @param string $element
     * @return string
     */
    protected function getDefaultClasses(string $component, string $element = 'base'): string
    {
        return config("ecoleplus-ui.defaults.{$component}.{$element}", '');
    }

    /**
     * Merge the given classes with the default classes.
     *
     * @param string|array $classes
     * @return string
     */
    public function mergeClasses($classes): string
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
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    protected function config(string $key, $default = null)
    {
        return config("ecoleplus-ui.{$key}", $default);
    }

    /**
     * Get the color classes for a variant.
     *
     * @param string $variant
     * @param string $component
     * @return string
     */
    protected function getColorClasses(string $variant, string $component): string
    {
        return $this->getDefaultClasses($component, $variant);
    }

    /**
     * Get the size classes.
     *
     * @param string $size
     * @param array $sizes
     * @return string
     */
    protected function getSizeClasses(string $size, array $sizes): string
    {
        return $sizes[$size] ?? $sizes['md'] ?? '';
    }

    /**
     * Determine if a given class exists in the class list.
     *
     * @paramclass Input extends BaseComponent
     {
         public string $type;
         public ?string $label;
         public ?string $error;
         public bool $disabled;

         public function __construct(
             string $type = 'text',
             ?string $label = null,
             ?string $error = null,
             bool $disabled = false
         ) {
             $this->type = $type;
             $this->label = $label;
             $this->error = $error;
             $this->disabled = $disabled;

             $this->defaultClasses = [
                 $this->getDefaultClasses('input', 'base'),
                 $this->error ? 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500' : '',
                 $this->disabled ? 'bg-gray-100 cursor-not-allowed' : '',
             ];
         }

         public function render()
         {
             return view('ecoleplus-ui::components.input');
         }

         // Add this method to get the computed classes
         public function getClasses(): string
         {
             return $this->mergeClasses($this->classes);
         }
     }
