<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Badge extends BaseComponent
{
    /**
     * Available sizes.
     */
    const SIZES = ['xs', 'sm', 'md', 'lg'];

    /**
     * Available variants.
     */
    const VARIANTS = ['primary', 'secondary', 'success', 'danger', 'warning', 'info'];

    /**
     * The badge size.
     *
     * @var string
     */
    public string $size;

    /**
     * The badge variant.
     *
     * @var string
     */
    public string $variant;

    /**
     * Whether to show a dot indicator.
     *
     * @var bool
     */
    public bool $dot;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $size = 'md',
        string $variant = 'primary',
        bool $dot = false
    ) {
        if (!in_array($size, self::SIZES)) {
            $size = 'md';
        }

        if (!in_array($variant, self::VARIANTS)) {
            $variant = 'primary';
        }

        $this->size = $size;
        $this->variant = $variant;
        $this->dot = $dot;

        $this->defaultClasses = [
            $this->getDefaultClasses('badge'),
            $this->getDefaultClasses('badge', $variant),
            $this->getDefaultClasses('badge', 'size.'.$size),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.badge');
    }

    /**
     * Get all the computed classes for the badge.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
    }

    /**
     * Get the dot classes.
     *
     * @return string
     */
    public function dotClasses(): string
    {
        return $this->getDefaultClasses('badge', 'dot');
    }
} 