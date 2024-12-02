<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Alert extends BaseComponent
{
    /**
     * Available types.
     */
    const TYPES = ['success', 'error', 'warning', 'info'];

    /**
     * The alert type.
     *
     * @var string
     */
    public string $type;

    /**
     * Whether the alert is dismissible.
     *
     * @var bool
     */
    public bool $dismissible;

    /**
     * The alert icon.
     *
     * @var string|null
     */
    public ?string $icon;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $type = 'info',
        bool $dismissible = false,
        ?string $icon = null
    ) {
        if (!in_array($type, self::TYPES)) {
            $type = 'info';
        }

        $this->type = $type;
        $this->dismissible = $dismissible;
        $this->icon = $icon;

        $this->defaultClasses = [
            $this->getDefaultClasses('alert'),
            $this->getDefaultClasses('alert', $type),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.alert');
    }

    /**
     * Get all the computed classes for the alert.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
    }
} 