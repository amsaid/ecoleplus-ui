<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Toast extends BaseComponent
{
    /**
     * Available types.
     */
    const TYPES = ['success', 'error', 'warning', 'info'];

    /**
     * Available positions.
     */
    const POSITIONS = ['top-right', 'top-left', 'bottom-right', 'bottom-left'];

    /**
     * The toast type.
     *
     * @var string
     */
    public string $type;

    /**
     * The toast position.
     *
     * @var string
     */
    public string $position;

    /**
     * Whether the toast is dismissible.
     *
     * @var bool
     */
    public bool $dismissible;

    /**
     * Auto-dismiss duration in milliseconds.
     *
     * @var int|null
     */
    public ?int $duration;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $type = 'info',
        string $position = 'top-right',
        bool $dismissible = true,
        ?int $duration = null
    ) {
        if (!in_array($type, self::TYPES)) {
            $type = 'info';
        }

        if (!in_array($position, self::POSITIONS)) {
            $position = 'top-right';
        }

        $this->type = $type;
        $this->position = $position;
        $this->dismissible = $dismissible;
        $this->duration = $duration;

        $this->defaultClasses = [
            $this->getDefaultClasses('toast'),
            $this->getDefaultClasses('toast', $type),
            $this->getDefaultClasses('toast', 'position.'.$position),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.toast');
    }

    /**
     * Get all the computed classes for the toast.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
    }

    /**
     * Get the icon classes.
     *
     * @return string
     */
    public function iconClasses(): string
    {
        return $this->getDefaultClasses('toast', 'icon');
    }
} 