<?php

namespace Ecoleplus\EcoleplusUi\Components;

class Avatar extends BaseComponent
{
    /**
     * Available sizes.
     */
    const SIZES = ['xs', 'sm', 'md', 'lg', 'xl'];

    /**
     * The avatar size.
     *
     * @var string
     */
    public string $size;

    /**
     * The image source URL.
     *
     * @var string|null
     */
    public ?string $src;

    /**
     * The alt text for the avatar.
     *
     * @var string
     */
    public string $alt;

    /**
     * The initials to show when no image is available.
     *
     * @var string|null
     */
    public ?string $initials;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $size = 'md',
        ?string $src = null,
        string $alt = '',
        ?string $initials = null
    ) {
        if (!in_array($size, self::SIZES)) {
            $size = 'md';
        }

        $this->size = $size;
        $this->src = $src;
        $this->alt = $alt;
        $this->initials = $initials;

        $this->defaultClasses = [
            $this->getDefaultClasses('avatar'),
            $this->getDefaultClasses('avatar', 'size.'.$size),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.avatar');
    }

    /**
     * Get all the computed classes for the avatar.
     *
     * @return string
     */
    public function classes(): string
    {
        return $this->mergeClasses($this->defaultClasses);
    }

    /**
     * Get the initials classes.
     *
     * @return string
     */
    public function initialsClasses(): string
    {
        return $this->getDefaultClasses('avatar', 'initials');
    }
} 