<?php

namespace Ecoleplus\EcoleplusUi;

use Illuminate\Support\Facades\Blade;
use Pest\Arch\Blueprint;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ecoleplus\EcoleplusUi\Components\{
    Button,
    Card,
    CardSection,
    Input,
    Select,
    Form,
    FormGroup,
    FormActions
};

class EcoleplusUiServiceProvider extends PackageServiceProvider
{
    /**
     * The prefix for all components.
     *
     * @var string
     */
    protected string $prefix = 'ecp';



    public function configurePackage(Package $package): void
    {
        $package
            ->name('ecoleplus-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponents($this->prefix,
                Button::class,
                Card::class,
                CardSection::class,
                Input::class,
                Select::class,
                Form::class,
                FormGroup::class,
                FormActions::class
            )
            ->hasAssets()
            //->hasCommand(EcoleplusUiCommand::class)
            ;
    }


    public function packageRegistered()
    {
        // Register config values
        $this->mergeConfigFrom(
            __DIR__.'/../config/ecoleplus-ui.php', 'ecoleplus-ui'
        );
    }
}
