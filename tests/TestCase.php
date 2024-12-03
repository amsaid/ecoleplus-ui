<?php

namespace EcolePlus\EcolePlusUi\Tests;

use EcolePlus\EcolePlusUi\EcolePlusUiServiceProvider;
use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Illuminate\Support\Facades\View;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        // Load package views
        View::addNamespace('ecoleplus-ui', __DIR__.'/../resources/views');

        // Load package config
        $this->app->make('config')->set('ecoleplus-ui', require __DIR__.'/../config/ecoleplus-ui.php');

        // Register components
        $this->app->make('blade.compiler')->component('eplus-alert', \EcolePlus\EcolePlusUi\Components\Alert::class);
        $this->app->make('blade.compiler')->component('eplus-button', \EcolePlus\EcolePlusUi\Components\Button::class);
        $this->app->make('blade.compiler')->component('eplus-input', \EcolePlus\EcolePlusUi\Components\Input::class);
    }

    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            EcolePlusUiServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        // Set up any environment configuration
        $app['config']->set('app.key', 'base64:'.base64_encode(random_bytes(32)));
    }
} 