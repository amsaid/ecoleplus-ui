<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Popover extends BaseComponent
{
    /**
     * The popover placement.
     *
     * @var string
     */
    public $placement;

    /**
     * Create a new component instance.
     *
     * @param string $placement
     */
    public function __construct(string $placement = 'bottom')
    {
        $this->placement = $placement;

        $this->defaultClasses = [
            $this->getDefaultClasses('popover'),
            $this->getDefaultClasses('popover', 'placement.'.$placement),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.popover');
    }

    /**
     * Get all the computed classes for the popover.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
    }
}
