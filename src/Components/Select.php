<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Select extends BaseComponent
{
    public ?string $label;
    public ?string $error;
    public bool $disabled;
    public $options;
    public $selected;

    public function __construct(
        $options = [],
        $selected = null,
        ?string $label = null,
        ?string $error = null,
        bool $disabled = false
    ) {
        $this->options = $options;
        $this->selected = $selected;
        $this->label = $label;
        $this->error = $error;
        $this->disabled = $disabled;

        $this->defaultClasses = [
            $this->getDefaultClasses('select', 'base'),
            $this->error ? 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500' : '',
            $this->disabled ? 'bg-gray-100 cursor-not-allowed' : '',
        ];
    }

    public function render()
    {
        return view('ecoleplus-ui::components.select');
    }
}
