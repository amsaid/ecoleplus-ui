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
            $this->getDefaultClasses('tabs', 'base'),
            $this->style === 'underline' ? $this->getDefaultClasses('tabs', 'underline.base') : '',
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
     * Get the list wrapper classes.
     *
     * @return string
     */
    public function listClasses(): string
    {
        return $this->getDefaultClasses('tabs', 'orientation.'.$this->orientation);
    }

    /**
     * Get the panel wrapper classes.
     *
     * @return string
     */
    public function panelWrapperClasses(): string
    {
        return $this->getDefaultClasses('tabs', 'panel.'.$this->orientation);
    }
} 