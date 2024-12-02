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
    public function tabClasses($style = 'underline'): string
    {
        $classes = [
            $this->getDefaultClasses('tabs', 'tab'),
        ];

        // Add style-specific classes if they exist
        if ($styleClasses = $this->getDefaultClasses('tabs', 'styles.'.$style.'.tab')) {
            $classes[] = $styleClasses;
        }

        return $this->mergeClasses($classes);
    }

    /**
     * Get the active tab classes.
     *
     * @return string
     */
    public function activeTabClasses($style = 'underline'): string
    {
        $classes = [
            $this->tabClasses(),
            $this->getDefaultClasses('tabs', 'tab_active'),
        ];

        // Add style-specific active classes if they exist
        if ($styleActiveClasses = $this->getDefaultClasses('tabs', 'styles.'.$style.'.tab_active')) {
            $classes[] = $styleActiveClasses;
        }

        return $this->mergeClasses($classes);
    }
} 