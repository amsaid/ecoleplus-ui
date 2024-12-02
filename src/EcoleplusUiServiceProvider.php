<?php

namespace Ecoleplus\EcoleplusUi;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ecoleplus\EcoleplusUi\Commands\EcoleplusUiCommand;
use Ecoleplus\EcoleplusUi\Components\{
    Button,
    Card,
    CardSection,
    Input
};

class EcoleplusUiServiceProvider extends PackageServiceProvider
{
    /**
     * The prefix for all components.
     *
     * @var string
     */
    protected string $prefix = 'ecp';

    /**
     * Array of components to register.
     *
     * @var array
     */
    protected array $components = [
        'button' => Button::class,
        'card' => Card::class,
        'card-section' => CardSection::class,
        'input' => Input::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('ecoleplus-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponents($this->prefix)
            ->hasAssets()
            ->hasCommand(EcoleplusUiCommand::class);
    }

    public function packageBooted()
    {
        // Register blade components with prefix
        foreach ($this->components as $alias => $component) {
            Blade::component("{$this->prefix}-{$alias}", $component);
        }

        // Register anonymous blade components with prefix
        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components', $this->prefix);
    }

    public function packageRegistered()
    {
        // Register config values
        $this->mergeConfigFrom(
            __DIR__.'/../config/ecoleplus-ui.php', 'ecoleplus-ui'
        );
    }
}
