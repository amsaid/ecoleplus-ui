<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Tab extends BaseComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public bool $selected = false
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\View\View
    {
        return view('ecoleplus-ui::components.tab', [
            'baseClasses' => $this->getPanelClasses(),
        ]);
    }

    /**
     * Get the panel classes
     */
    protected function getPanelClasses(): string
    {
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs.panel', 'base'),
            $this->getDefaultClasses('tabs.panel', 'default'),
        ]);
    }
}
