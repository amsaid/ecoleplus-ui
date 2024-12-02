<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Progress extends BaseComponent
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
     * The progress size.
     *
     * @var string
     */
    public string $size;

    /**
     * The progress variant.
     *
     * @var string
     */
    public string $variant;

    /**
     * The progress value (0-100).
     *
     * @var int
     */
    public int $value;

    /**
     * Whether to show the value label.
     *
     * @var bool
     */
    public bool $showValue;

    /**
     * Create a new component instance.
     */
    public function __construct(
        int $value = 0,
        string $size = 'md',
        string $variant = 'primary',
        bool $showValue = false
    ) {
        if (!in_array($size, self::SIZES)) {
            $size = 'md';
        }

        if (!in_array($variant, self::VARIANTS)) {
            $variant = 'primary';
        }

        $this->value = max(0, min(100, $value));
        $this->size = $size;
        $this->variant = $variant;
        $this->showValue = $showValue;

        $this->defaultClasses = [
            $this->getDefaultClasses('progress'),
            $this->getDefaultClasses('progress', 'size.'.$size),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.progress');
    }

    /**
     * Get all the computed classes for the progress.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
    }

    /**
     * Get the bar classes.
     *
     * @return string
     */
    public function barClasses(): string
    {
        return $this->getDefaultClasses('progress', $this->variant);
    }

    /**
     * Get the label classes.
     *
     * @return string
     */
    public function labelClasses(): string
    {
        return $this->getDefaultClasses('progress', 'label');
    }
} 