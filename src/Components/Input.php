<?php
namespace Ecoleplus\EcoleplusUi\Components;

class Input extends BaseComponent
{
    public string $type;
    public ?string $label;
    public ?string $error;
    public bool $disabled;

    public function __construct(
        string $type = 'text',
        ?string $label = null,
        ?string $error = null,
        bool $disabled = false
    ) {
        $this->type = $type;
        $this->label = $label;
        $this->error = $error;
        $this->disabled = $disabled;

        $this->defaultClasses = [
            $this->getDefaultClasses('input', 'base'),
            $this->error ? 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500' : '',
            $this->disabled ? 'bg-gray-100 cursor-not-allowed' : '',
        ];
    }

    // Add this method to get the computed classes
    public function getClasses(): string
    {
        return $this->mergeClasses($this->classes);
    }

    public function render()
    {
        return view('ecoleplus-ui::components.input');
    }


}
