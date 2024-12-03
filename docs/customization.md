# Component Customization Guide

## Table of Contents

- [Theme Configuration](#theme-configuration)
- [Component Classes](#component-classes)
- [Custom Variants](#custom-variants)
- [Dark Mode](#dark-mode)
- [Icons](#icons)
- [Advanced Customization](#advanced-customization)

## Theme Configuration

You can customize the default theme colors and other design tokens in `config/ecoleplus-ui.php`:

```php
'theme' => [
    'primary' => [
        'background' => 'bg-blue-600',
        'hover' => 'hover:bg-blue-700',
        'text' => 'text-white',
    ],
    'secondary' => [
        'background' => 'bg-gray-600',
        'hover' => 'hover:bg-gray-700',
        'text' => 'text-white',
    ],
],
```

## Component Classes

### Button Component

```php
'components' => [
    'button' => [
        'base' => 'eplus-btn inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150',
        'primary' => 'eplus-btn-primary',
        'secondary' => 'eplus-btn-secondary',
    ],
],
```

You can also extend the button with custom variants:

```php
'button' => [
    // ... existing config
    'custom' => 'bg-purple-600 hover:bg-purple-700 text-white',
],
```

Usage:
```blade
<x-eplus-button variant="custom">
    Custom Button
</x-eplus-button>
```

### Input Component

```php
'input' => [
    'base' => 'eplus-input border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm',
    'error' => 'eplus-input-error',
    'sizes' => [
        'sm' => 'px-2 py-1 text-sm',
        'md' => 'px-3 py-2',
        'lg' => 'px-4 py-3 text-lg',
    ],
],
```

### Card Component

```php
'card' => [
    'base' => 'eplus-card bg-white rounded-lg shadow-sm',
    'header' => 'eplus-card-header',
    'body' => 'eplus-card-body',
    'footer' => 'eplus-card-footer',
],
```

## Custom Variants

You can create custom variants for any component by extending the CSS:

```css
/* resources/css/app.css */
@layer components {
    .eplus-btn-danger {
        @apply bg-red-600 text-white hover:bg-red-700 focus:ring-red-500;
    }

    .eplus-input-bordered {
        @apply border-2;
    }

    .eplus-card-elevated {
        @apply shadow-xl;
    }
}
```

## Dark Mode

Components support dark mode out of the box. You can customize dark mode styles:

```css
@layer components {
    .eplus-card {
        @apply dark:bg-gray-800 dark:text-white;
    }

    .eplus-input {
        @apply dark:bg-gray-700 dark:border-gray-600 dark:text-white;
    }
}
```

## Icons

Configure default icon settings:

```php
'icons' => [
    'style' => 'heroicon', // default icon set
    'class' => 'w-5 h-5',  // default icon classes
    'sets' => [
        'custom' => 'custom-icon-class',
    ],
],
```

## Advanced Customization

### Extending Components

You can extend components by creating your own component class:

```php
namespace App\View\Components;

use EcolePlus\EcolePlusUi\Components\Button as BaseButton;

class CustomButton extends BaseButton
{
    public function classes(): string
    {
        return parent::classes() . ' custom-additional-classes';
    }
}
```

Register in your `AppServiceProvider`:

```php
use Illuminate\Support\Facades\Blade;

public function boot()
{
    Blade::component('custom-button', CustomButton::class);
}
```

### Custom Templates

Publish and customize component templates:

```bash
php artisan vendor:publish --tag="ecoleplus-ui-views"
```

This will publish all component templates to `resources/views/vendor/ecoleplus-ui/`.

### JavaScript Customization

For components using Alpine.js, you can extend their behavior:

```js
// resources/js/app.js
Alpine.data('eplusDropdown', (config) => ({
    open: false,
    // Add custom methods
    toggle() {
        this.open = !this.open;
        // Add custom logic
    }
}));
```

## Best Practices

1. Keep customizations organized in separate files
2. Use semantic class names
3. Follow Tailwind's utility-first approach
4. Maintain accessibility standards
5. Test customizations in both light and dark modes
6. Document custom variants and extensions
7. Use CSS layers appropriately

## Examples

### Custom Theme Example

```php
// config/ecoleplus-ui.php
return [
    'theme' => [
        'primary' => [
            'background' => 'bg-indigo-600',
            'hover' => 'hover:bg-indigo-700',
            'text' => 'text-white',
        ],
        'accent' => [
            'background' => 'bg-amber-500',
            'hover' => 'hover:bg-amber-600',
            'text' => 'text-white',
        ],
    ],
];
```

### Custom Component Example

```php
// Custom card with gradient background
'components' => [
    'card' => [
        'gradient' => 'eplus-card-gradient bg-gradient-to-r from-blue-500 to-purple-500 text-white',
    ],
],
```

Usage:
```blade
<x-eplus-card class="gradient">
    Gradient Card Content
</x-eplus-card>
```
