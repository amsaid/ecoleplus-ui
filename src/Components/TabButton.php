<?php

namespace Ecoleplus\EcoleplusUi\Components;

use Ecoleplus\EcoleplusUi\Traits\HasContext;

class TabButton extends BaseComponent
{
    use HasContext;

    public function __construct(
        public string $name,
        public ?string $icon = null,
        public ?string $iconPosition = 'left'
    ) {
    }

    public function render(): \Illuminate\View\View
    {
        return view('ecoleplus-ui::components.tab-button', [
            'baseClasses' => $this->getBaseClasses(),
            'activeClasses' => $this->getActiveClasses(),
            'inactiveClasses' => $this->getInactiveClasses(),
        ]);
    }

    protected function getBaseClasses(): string
    {
        $style = $this->getContext('style', 'underline');

        return $this->mergeClasses([
            $this->getDefaultClasses('tabs.tab', 'base'),
            $this->getDefaultClasses('tabs.tab.styles.' . $style, 'tab'),
        ]);
    }

    protected function getActiveClasses(): string
    {
        $style = $this->getContext('style', 'underline');
        return $this->getDefaultClasses('tabs.tab.styles.' . $style, 'active');
    }

    protected function getInactiveClasses(): string
    {
        $style = $this->getContext('style', 'underline');
        return $this->getDefaultClasses('tabs.tab.styles.' . $style, 'inactive');
    }
}
