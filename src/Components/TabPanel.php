<?php

namespace Ecoleplus\EcoleplusUi\Components;

class TabPanel extends BaseComponent
{
    /**
     * The panel ID.
     *
     * @var string
     */
    public string $id;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id)
    {
        $this->id = $id;

        $this->defaultClasses = [
            $this->getDefaultClasses('tabs', 'panel.base'),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.tab-panel');
    }

    /**
     * Get all the computed classes for the panel.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
    }
} 