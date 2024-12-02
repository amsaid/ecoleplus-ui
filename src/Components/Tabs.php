<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Tabs extends BaseComponent
{
    /**
     * Available styles.
     */
    const STYLES = ['pills', 'underline'];

    /**
     * Available orientations.
     */
    const ORIENTATIONS = ['horizontal', 'vertical'];

    /**
     * The tabs style.
     *
     * @var string
     */
    public string $style;

    /**
     * The tabs orientation.
     *
     * @var string
     */
    public string $orientation;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $style = 'underline',
        string $orientation = 'horizontal'
    ) {
        if (!in_array($style, self::STYLES)) {
            $style = 'underline';
        }

        if (!in_array($orientation, self::ORIENTATIONS)) {
            $orientation = 'horizontal';
        }

        $this->style = $style;
        $this->orientation = $orientation;

        $this->defaultClasses = [
            $this->getDefaultClasses('tabs'),
            $this->getDefaultClasses('tabs', $style),
            $this->getDefaultClasses('tabs', 'orientation.'.$orientation),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.tabs');
    }

    /**
     * Get all the computed classes for the tabs.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
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