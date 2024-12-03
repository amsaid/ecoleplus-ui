<?php

namespace EcolePlus\EcolePlusUi\Components;

use Illuminate\Support\Arr;

class Button extends Component
{
    public function __construct(
        public readonly ?string $type = 'button',
        public readonly ?string $variant = 'primary',
        public readonly ?string $size = 'md',
        public readonly ?bool $disabled = false,
    ) {}

    public function render()
    {
        return view('ecoleplus-ui::components.button');
    }

    public function classes(): string
    {
        $config = config('ecoleplus-ui.components.button');

        return $this->mergeClasses(
            $config['base'],
            $config[$this->variant] ?? '',
            $this->disabled ? 'opacity-50 cursor-not-allowed' : '',
        );
    }
} 