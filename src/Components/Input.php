<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Input extends BaseComponent
{
    /**
     * The input type.
     *
     * @var string
     */
    public string $type;

    /**
     * The input label.
     *
     * @var string|null
     */
    public ?string $label;

    /**
     * The error message.
     *
     * @var string|null
     */
    public ?string $error;

    /**
     * The help text.
     *
     * @var string|null
     */
    public ?string $help;

    /**
     * The prefix content.
     *
     * @var string|null
     */
    public ?string $prefix;

    /**
     * The suffix content.
     *
     * @var string|null
     */
    public ?string $suffix;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $type = 'text',
        ?string $label = null,
        ?string $error = null,
        ?string $help = null,
        ?string $prefix = null,
        ?string $suffix = null,
        bool $disabled = false
    ) {
        $this->type = $type;
        $this->label = $label;
        $this->error = $error;
        $this->help = $help;
        $this->prefix = $prefix;
        $this->suffix = $suffix;
        $this->disabled = $disabled;

        $this->defaultClasses = [
            $this->getDefaultClasses('input', 'base'),
            $this->error ? 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500' : '',
            $this->disabled ? 'bg-gray-100 cursor-not-allowed' : '',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.input');
    }

    /**
     * Get all the computed classes for the input.
     *
     * @return string
     */
    public function classes(): string
    {
        $classes = [
            $this->getDefaultClasses('input'),
            $this->error ? $this->getDefaultClasses('input', 'error') : '',
            $this->disabled ? $this->getDefaultClasses('input', 'disabled') : '',
            $this->prefix ? 'pl-10' : '',
            $this->suffix ? 'pr-10' : '',
        ];

        return $this->mergeClasses($classes);
    }

    /**
     * Get the wrapper classes.
     *
     * @return string
     */
    public function wrapperClasses(): string
    {
        return $this->getDefaultClasses('input', 'wrapper');
    }

    /**
     * Get the label classes.
     *
     * @return string
     */
    public function labelClasses(): string
    {
        return $this->getDefaultClasses('input', 'label');
    }

    /**
     * Get the help text classes.
     *
     * @return string
     */
    public function helpClasses(): string
    {
        return $this->getDefaultClasses('input', 'help');
    }

    /**
     * Get the error message classes.
     *
     * @return string
     */
    public function errorClasses(): string
    {
        return $this->getDefaultClasses('input', 'error-text');
    }

    /**
     * Get the prefix classes.
     *
     * @return string
     */
    public function prefixClasses(): string
    {
        return $this->getDefaultClasses('input', 'prefix');
    }

    /**
     * Get the suffix classes.
     *
     * @return string
     */
    public function suffixClasses(): string
    {
        return $this->getDefaultClasses('input', 'suffix');
    }
}
