<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Tabs extends BaseComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $selected = '',
        public string $style = 'underline',
        public string $orientation = 'horizontal',
        public bool $urlHash = false,
        public bool $lazy = false
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\View\View
    {
        return view('ecoleplus-ui::components.tabs', [
            'baseClasses' => $this->getBaseClasses(),
        ]);
    }

    /**
     * Get the base classes for the tabs container
     */
    protected function getBaseClasses(): string
    {
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs', 'base'),
            $this->getDefaultClasses('tabs.styles.' . $this->style, 'base'),
            $this->getDefaultClasses('tabs.orientation', $this->orientation),
        ]);
    }

    /**
     * Get classes for a tab button
     */
    public function getTabClasses(bool $isActive = false): string
    {
        $classes = [
            $this->getDefaultClasses('tabs', 'tab'),
            $this->getDefaultClasses('tabs.styles.' . $this->style, 'tab'),
        ];

        if ($isActive) {
            $classes[] = $this->getDefaultClasses('tabs', 'tab_active');
            $classes[] = $this->getDefaultClasses('tabs.styles.' . $this->style, 'tab_active');
        }

        return $this->mergeClasses($classes);
    }

    /**
     * Get classes for tab panels container
     */
    protected function getPanelClasses(): string
    {
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs.panel', 'base'),
            $this->getDefaultClasses('tabs.panel', $this->orientation),
        ]);
    }
}
