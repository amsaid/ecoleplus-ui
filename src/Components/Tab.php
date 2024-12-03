<?php
// Components/Tab.php
namespace Ecoleplus\EcoleplusUi\Components;

class Tab extends BaseComponent
{
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
        $parentTabs = $this->closest('ecp-tabs');

        return $this->mergeClasses([
            $this->getDefaultClasses('tabs.panel', 'base'),
            $this->getDefaultClasses('tabs.panel.orientation',
                $parentTabs->orientation ?? 'horizontal'
            ),
            $this->style
                ? $this->getDefaultClasses('tabs.panel.styles', $this->style)
                : '',
        ]);
    }
}
