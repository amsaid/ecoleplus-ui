<?php

namespace EcolePlus\EcolePlusUi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class EcolePlusUiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/ecoleplus-ui.php', 'ecoleplus-ui'
        );
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ecoleplus-ui');

        $this->publishes([
            __DIR__.'/../config/ecoleplus-ui.php' => config_path('ecoleplus-ui.php'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/ecoleplus-ui'),
            __DIR__.'/../resources/css' => resource_path('css/vendor/ecoleplus-ui'),
            __DIR__.'/../resources/js' => resource_path('js/vendor/ecoleplus-ui'),
        ], 'ecoleplus-ui-assets');

        // Register Blade Components
        $this->registerComponents();
    }

    protected function registerComponents(): void
    {
        // Register blade components with eplus- prefix
        Blade::componentNamespace('EcolePlus\\EcolePlusUi\\Components', 'eplus');
    }
} 