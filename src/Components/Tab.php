<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Tab extends BaseComponent
{
    /**
     * The tab ID.
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
        return view('ecoleplus-ui::components.tab');
    }

    /**
     * Get the tab button classes.
     *
     * @return string
     */
    public function tabClasses(): string
    {
        return $this->getDefaultClasses('tabs', 'tab');
    }

    /**
     * Get the active tab classes.
     *
     * @return string
     */
    public function activeTabClasses(): string
    {
        return $this->getDefaultClasses('tabs', 'tab.active');
    }
} 