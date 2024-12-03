<?php

namespace Ecoleplus\EcoleplusUi\Components;

use Ecoleplus\EcoleplusUi\Traits\HasContext;

class Tab extends BaseComponent
{
    use HasContext;

    public function __construct(
        public string $name,
        public bool $selected = false,
        public ?string $style = null
    ) {
    }

    public function render(): \Illuminate\View\View
    {
        return view('ecoleplus-ui::components.tab', [
            'baseClasses' => $this->getPanelClasses(),
        ]);
    }

    protected function getPanelClasses(): string
    {
        $orientation = $this->getContext('orientation', 'horizontal');

        return $this->mergeClasses([
            $this->getDefaultClasses('tabs.panel', 'base'),
            $this->getDefaultClasses('tabs.panel.orientation', $orientation),
            $this->style
                ? $this->getDefaultClasses('tabs.panel.styles', $this->style)
                : '',
        ]);
    }
}
