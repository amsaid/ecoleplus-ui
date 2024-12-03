<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Tab extends BaseComponent
{
    /**
     * The unique identifier for the tab
     *
     * @var string
     */
    public $name;

    /**
     * Whether this tab is initially selected
     *
     * @var bool
     */
    public $selected;

    /**
     * Initialize the component
     *
     * @param string $name Tab identifier
     * @param bool $selected Whether initially selected
     */
    public function __construct(string $name, bool $selected = false)
    {
        $this->name = $name;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $baseClasses = $this->getDefaultClasses('tabs.panel', 'base');
        $orientationClasses = $this->getDefaultClasses('tabs.panel',
            $this->getAttribute('orientation', 'horizontal'));

        return view('ecoleplus-ui::components.tab', [
            'baseClasses' => $this->mergeClasses([
                $baseClasses,
                $orientationClasses,
            ]),
        ]);
    }
}
