<?php
// Components/TabButton.php
namespace Ecoleplus\EcoleplusUi\Components;

class TabButton extends BaseComponent
{
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
        ]);
    }

    protected function getBaseClasses(): string
    {
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs.tab', 'base'),
            $this->getDefaultClasses('tabs.tab.styles.' . $this->closest('ecp-tabs')->style, 'tab'),
        ]);
    }
}
