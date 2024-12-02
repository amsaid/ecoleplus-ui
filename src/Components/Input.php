<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Input extends BaseComponent
{
    /**
     * The input type.
     */
    public string $type;

    /**
     * The input value.
     */
    public mixed $value;

    /**
     * The input placeholder.
     */
    public ?string $placeholder;

    /**
     * The prefix content.
     */
    public ?string $prefix;

    /**
     * The suffix content.
     */
    public ?string $suffix;

    /**
     * The textarea rows.
     */
    public int $rows;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $type = 'text',
        mixed $value = null,
        ?string $placeholder = null,
        ?string $prefix = null,
        ?string $suffix = null,
        int $rows = 3
    ) {
        $this->type = $type;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->prefix = $prefix;
        $this->suffix = $suffix;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('ecoleplus-ui::components.input');
    }

    /**
     * Get the input wrapper classes.
     */
    public function wrapperClasses(): string
    {
        return $this->getDefaultClasses('input', 'wrapper');
    }

    /**
     * Get the input classes.
     */
    public function classes(): string
    {
        $baseClasses = $this->getDefaultClasses('input', 'base');

        if ($this->type === 'file') {
            return $this->getDefaultClasses('input', 'file');
        }

        if ($this->type === 'textarea') {
            return $this->getDefaultClasses('input', 'textarea');
        }

        return $baseClasses;
    }

    /**
     * Get the prefix wrapper classes.
     */
    public function prefixClasses(): string
    {
        return $this->getDefaultClasses('input', 'prefix');
    }

    /**
     * Get the suffix wrapper classes.
     */
    public function suffixClasses(): string
    {
        return $this->getDefaultClasses('input', 'suffix');
    }
}
