<?php

namespace Ecoleplus\EcoleplusUi\Components;

use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;

class Icon extends BaseComponent
{
    /**
     * The name of the icon
     *
     * @var string
     */
    public $name;

    /**
     * The style of the icon (solid|outline)
     *
     * @var string
     */
    public $style;

    /**
     * The size of the icon
     *
     * @var string
     */
    public $size;

    /**
     * Custom SVG string or path
     *
     * @var string|null
     */
    public $svg;

    /**
     * Initialize the component
     *
     * @param string $name The icon name
     * @param string $style The icon style (solid|outline)
     * @param string $size The icon size (xs|sm|md|lg|xl)
     * @param string|null $svg Custom SVG content or path
     */
    public function __construct(
        string $name,
        string $style = 'solid',
        string $size = 'md',
        ?string $svg = null
    ) {
        $this->name = $name;
        $this->style = $style;
        $this->size = $size;
        $this->svg = $svg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('ecoleplus-ui::components.icon', [
            'iconName' => $this->getIconName(),
            'baseClasses' => $this->getIconClasses(),
            'svg' => $this->getSvgContent(),
        ]);
    }

    /**
     * Get the formatted icon name for Blade Icons
     *
     * @return string|null
     */
    protected function getIconName(): ?string
    {
        // Return null if using custom SVG
        if ($this->svg) {
            return null;
        }

        // If the name already includes a prefix, use it as is
        if (Str::contains($this->name, '-')) {
            return $this->name;
        }

        // Default to Heroicons if no prefix is specified
        $prefix = $this->style === 'outline' ? 'heroicon-o' : 'heroicon-s';
        return "{$prefix}-{$this->name}";
    }

    /**
     * Get custom SVG content
     *
     * @return \Illuminate\Support\HtmlString|null
     */
    protected function getSvgContent(): ?HtmlString
    {
        if (!$this->svg) {
            return null;
        }

        // If it's a file path, load the SVG file
        if (file_exists($this->svg)) {
            $svg = file_get_contents($this->svg);
        } else {
            $svg = $this->svg;
        }

        // Clean and prepare SVG
        $svg = $this->prepareSvg($svg);

        return new HtmlString($svg);
    }

    /**
     * Clean and prepare SVG content
     *
     * @param string $svg
     * @return string
     */
    protected function prepareSvg(string $svg): string
    {
        // Remove XML declaration
        $svg = preg_replace('/<\?xml.*?\?>/', '', $svg);

        // Remove comments
        $svg = preg_replace('/<!--.*?-->/', '', $svg);

        // Ensure SVG has width, height, and viewBox attributes
        if (!Str::contains($svg, 'viewBox')) {
            $svg = str_replace('<svg', '<svg viewBox="0 0 24 24"', $svg);
        }

        // Remove width and height attributes to allow CSS sizing
        $svg = preg_replace('/(width|height)="\d+"/', '', $svg);

        // Add current color if no fill or stroke is specified
        if (!Str::contains($svg, 'fill="') && !Str::contains($svg, 'stroke="')) {
            $svg = str_replace('<svg', '<svg fill="currentColor"', $svg);
        }

        return trim($svg);
    }

    /**
     * Get the classes for the icon
     *
     * @return string
     */
    protected function getIconClasses(): string
    {
        $sizeClasses = $this->getSizeClasses($this->size, [
            'xs' => 'w-3 h-3',
            'sm' => 'w-4 h-4',
            'md' => 'w-6 h-6',
            'lg' => 'w-8 h-8',
            'xl' => 'w-10 h-10',
        ]);

        return $this->mergeClasses([
            $this->getDefaultClasses('icon', 'base'),
            $sizeClasses,
        ]);
    }
}
