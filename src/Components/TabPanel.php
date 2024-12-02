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
} 