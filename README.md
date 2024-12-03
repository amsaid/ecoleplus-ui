# EcolePlus UI

A modern UI component library for Laravel 11 applications, built with the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).

## Features

- 🎨 Modern and clean design
- 🔧 Built for Laravel 11
- ⚡ Powered by the TALL stack
- 📱 Fully responsive components
- 🌙 Dark mode support
- ♿ Accessible components
- 🎯 Type-safe components
- 🔄 Easy to customize

## Requirements

- PHP 8.2 or higher
- Laravel 11.x
- Tailwind CSS 3.x
- Alpine.js 3.x

## Installation

You can install the package via composer:

```bash
composer require amsaid/ecoleplus-ui
```

After installing the package, you can publish the assets:

```bash
php artisan vendor:publish --provider="EcolePlus\EcolePlusUi\EcolePlusUiServiceProvider"
```

## Setup

1. Add the Tailwind CSS configuration:

```js
// tailwind.config.js
module.exports = {
    content: [
        './vendor/amsaid/ecoleplus-ui/resources/**/*.blade.php',
        // ...
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
```

2. Import the CSS in your main stylesheet:

```css
@import 'vendor/amsaid/ecoleplus-ui/resources/css/components.css';
```

## Available Components

### Button

```blade
<x-eplus-button type="button" variant="primary">
    Click me
</x-eplus-button>
```

### Input

```blade
<x-eplus-input 
    name="email"
    label="Email Address"
    type="email"
/>
```

### Card

```blade
<x-eplus-card header="Card Title" footer="Card Footer">
    Card content goes here
</x-eplus-card>
```

### Alert

```blade
<x-eplus-alert type="success" title="Success!" dismissible>
    Operation completed successfully.
</x-eplus-alert>
```

### Badge

```blade
<x-eplus-badge type="primary" rounded>
    New
</x-eplus-badge>
```

### Avatar

```blade
<x-eplus-avatar 
    src="path/to/image.jpg"
    size="md"
    status="online"
/>
```

### Dropdown

```blade
<x-eplus-dropdown>
    <x-slot:trigger>
        <x-eplus-button>Options</x-eplus-button>
    </x-slot:trigger>
    
    <a href="#" class="block px-4 py-2 text-sm">Option 1</a>
    <a href="#" class="block px-4 py-2 text-sm">Option 2</a>
</x-eplus-dropdown>
```

## Documentation

For detailed documentation, please refer to the [docs](docs) directory:

- [Getting Started](docs/getting-started.md)
- [Customization Guide](docs/customization.md)
- [Components Documentation](docs/components)

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- [Said AMRANI](https://github.com/amsaid)
- [All Contributors](../../contributors)

## Security

If you discover any security-related issues, please email your-email@example.com instead of using the issue tracker.
