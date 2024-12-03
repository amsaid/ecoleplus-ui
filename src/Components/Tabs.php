<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Tabs extends BaseComponent
{
    /**
     * The currently selected tab name
     *
     * @var string|null
     */
    public $selected;

    /**
     * The visual style of the tabs (underline|pills)
     *
     * @var string
     */
    public $style;

    /**
     * The orientation of the tabs (horizontal|vertical)
     *
     * @var string
     */
    public $orientation;

    /**
     * Whether to sync the selected tab with the URL hash
     *
     * @var bool
     */
    public $urlHash;

    /**
     * Whether to lazy load tab content
     *
     * @var bool
     */
    public $lazy;

    /**
     * Initialize the component
     *
     * @param string|null $selected Initial selected tab
     * @param string $style Visual style of tabs
     * @param string $orientation Tab orientation
     * @param bool $urlHash Whether to sync with URL hash
     * @param bool $lazy Whether to lazy load content
     */
    public function __construct(
        string $selected = null,
        string $style = 'underline',
        string $orientation = 'horizontal',
        bool $urlHash = false,
        bool $lazy = false
    ) {
        $this->selected = $selected;
        $this->style = $style;
        $this->orientation = $orientation;
        $this->urlHash = $urlHash;
        $this->lazy = $lazy;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $baseClasses = $this->getDefaultClasses('tabs', 'base');
        $styleClasses = $this->getDefaultClasses('tabs.styles.' . $this->style, 'base');
        $orientationClasses = $this->getDefaultClasses('tabs.orientation', $this->orientation);

        return view('ecoleplus-ui::components.tabs', [
            'baseClasses' => $this->mergeClasses([
                $baseClasses,
                $styleClasses,
                $orientationClasses,
            ]),
        ]);
    }

    /**
     * Get the classes for a tab button
     *
     * @param bool $isActive Whether the tab is active
     * @return string
     */
    public function getTabClasses($isActive = false): string
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
}
