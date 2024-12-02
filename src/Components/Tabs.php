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
     * Create a new component instance.
     */
    public function __construct(

        /**
         * The tabs style.
         *
         * @var string
         */
        string $style = 'underline',

        /**
         * The tabs orientation.
         *
         * @var string
         */
        string $orientation = 'horizontal'
    ) {
        if (!in_array($this->style, self::STYLES)) {
            $this->style = 'underline';
        }

        if (!in_array($this->orientation, self::ORIENTATIONS)) {
            $this->orientation = 'horizontal';
        }

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