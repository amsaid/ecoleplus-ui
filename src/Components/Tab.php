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
     * The tab style from parent.
     *
     * @var string
     */
    public string $style;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
        $this->style = 'underline'; // Default style
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
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs', 'tab.base'),
            $this->getDefaultClasses('tabs', $this->style.'.tab.base'),
        ]);
    }

    /**
     * Get the active tab classes.
     *
     * @return string
     */
    public function activeTabClasses(): string
    {
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs', 'tab.active'),
            $this->getDefaultClasses('tabs', $this->style.'.tab.active'),
        ]);
    }
} 