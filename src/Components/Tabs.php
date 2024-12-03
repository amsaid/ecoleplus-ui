<?php
// Components/Tabs.php
namespace Ecoleplus\EcoleplusUi\Components;

class Tabs extends BaseComponent
{
    public function __construct(
        public string $selected = '',
        public string $style = 'underline',
        public string $orientation = 'horizontal',
        public bool $urlHash = false,
        public bool $lazy = false
    ) {
    }

    public function render(): \Illuminate\View\View
    {
        return view('ecoleplus-ui::components.tabs', [
            'baseClasses' => $this->getBaseClasses(),
            'listClasses' => $this->getListClasses(),
        ]);
    }

    protected function getBaseClasses(): string
    {
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs', 'base'),
        ]);
    }

    protected function getListClasses(): string
    {
        return $this->mergeClasses([
            $this->getDefaultClasses('tabs.list', 'base'),
            $this->getDefaultClasses('tabs.list.orientation', $this->orientation),
            $this->getDefaultClasses('tabs.tab.styles.' . $this->style, 'list'),
        ]);
    }
}
