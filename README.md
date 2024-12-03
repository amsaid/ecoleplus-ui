# EcolePlus UI

A modern UI component library for Laravel 11 applications, built with the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).

## Features

- 🎨 Modern and clean design
- 🔧 Built for Laravel 11
- ⚡ Powered by the TALL stack
- 📱 Fully responsive components
- 🌙 Dark mode support out of the box
- ♿ Accessible components
- 🎯 Type-safe components
- 🔄 Easy to customize
- 🎭 Interactive components with Alpine.js
- 🔍 Comprehensive test coverage

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

After installing the package, you can publish the configuration and assets:

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
    darkMode: 'class', // Enable dark mode support
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    200: '#bae6fd',
                    300: '#7dd3fc',
                    400: '#38bdf8',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    700: '#0369a1',
                    800: '#075985',
                    900: '#0c4a6e',
                    950: '#082f49',
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
```

2. Add Alpine.js to your application:

```html
<!-- In your layout file -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Available Components

### Form Components

#### Button
```blade
<x-eplus::button type="button" variant="primary">
    Click me
</x-eplus::button>

<!-- With icons -->
<x-eplus::button iconLeft="heroicon-m-plus">
    Add Item
</x-eplus::button>
```

#### Input
```blade
<x-eplus::input 
    name="email"
    label="Email Address"
    type="email"
    icon="heroicon-m-envelope"
    hint="We'll never share your email"
/>
```

#### Textarea
```blade
<x-eplus::textarea 
    name="description"
    label="Description"
    rows="4"
    hint="Maximum 500 characters"
/>
```

#### Select
```blade
<x-eplus::select 
    name="country"
    label="Select Country"
    :options="[
        'us' => 'United States',
        'uk' => 'United Kingdom'
    ]"
    placeholder="Choose a country"
/>
```

### Layout Components

#### Card
```blade
<x-eplus::card shadow>
    <x-slot:header>Card Title</x-slot:header>
    Card content goes here
    <x-slot:footer>Card Footer</x-slot:footer>
</x-eplus::card>
```

#### Card Section
```blade
<x-eplus::card>
    <x-eplus::card-section 
        title="Section Title"
        description="Optional section description"
    >
        Section content goes here
    </x-eplus::card-section>
</x-eplus::card>
```

### Interactive Components

#### Dropdown
```blade
<x-eplus::dropdown align="right" width="48">
    <x-slot:trigger>
        <x-eplus::button>
            Options
        </x-eplus::button>
    </x-slot:trigger>
    
    <x-slot:content>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            Profile
        </a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            Settings
        </a>
    </x-slot:content>
</x-eplus::dropdown>
```

#### Modal
```blade
<div x-data="{ open: false }">
    <x-eplus::button @click="open = true">
        Open Modal
    </x-eplus::button>

    <x-eplus::modal name="example" :show="false" x-model="open">
        <x-slot:title>
            Modal Title
        </x-slot:title>

        Modal content goes here...

        <x-slot:footer>
            <x-eplus::button @click="open = false">
                Close
            </x-eplus::button>
        </x-slot:footer>
    </x-eplus::modal>
</div>
```

### Feedback Components

#### Alert
```blade
<x-eplus::alert type="success" title="Success!" dismissible>
    Operation completed successfully.
</x-eplus::alert>
```

#### Badge
```blade
<x-eplus::badge variant="primary" size="md">
    New
</x-eplus::badge>
```

#### Progress
```blade
<x-eplus::progress 
    :value="75" 
    label="Uploading..." 
    variant="primary"
    :showValue="true"
    :animated="true"
/>
```

### Display Components

#### Avatar
```blade
<!-- With image -->
<x-eplus::avatar 
    src="https://example.com/avatar.jpg"
    alt="John Doe"
    size="lg"
    status="online"
/>

<!-- With initials fallback -->
<x-eplus::avatar 
    alt="John Doe"
    size="lg"
    status="online"
/>
```

## Dark Mode Support

All components support dark mode out of the box. To enable dark mode in your application:

1. Make sure your `tailwind.config.js` has dark mode enabled:

```js
module.exports = {
    darkMode: 'class',
    // ...
}
```

2. Toggle dark mode using Alpine.js:

```html
<html x-data="{ dark: localStorage.getItem('dark') === 'true' }" 
      x-init="$watch('dark', val => localStorage.setItem('dark', val))"
      :class="{ 'dark': dark }">
    <button @click="dark = !dark">
        Toggle Dark Mode
    </button>
</html>
```

Components will automatically adjust their styling in dark mode, providing:
- Appropriate contrast ratios
- Readable text colors
- Softer background colors
- Consistent visual hierarchy
- Reduced eye strain in dark environments

## Documentation

For detailed documentation, please refer to the [docs](docs) directory:

- [Getting Started](docs/getting-started.md)
- [Customization Guide](docs/customization.md)
- [Components Documentation](docs/components)

## Testing

The package includes a comprehensive test suite. To run the tests:

```bash
composer test
```

For code coverage report:

```bash
composer test-coverage
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request. Make sure to:

1. Add tests for new features
2. Follow the existing code style
3. Update documentation as needed

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- [Said](https://github.com/amsaid)
- [All Contributors](../../contributors)

## Security

If you discover any security-related issues, please email your-email@example.com instead of using the issue tracker.
