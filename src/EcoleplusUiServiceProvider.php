<?php

namespace Ecoleplus\EcoleplusUi;

use Illuminate\Support\Facades\Blade;
use Pest\Arch\Blueprint;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ecoleplus\EcoleplusUi\Components\{
    Button,
    Input,
    CardSection,
    Select,
    Form,
    FormGroup,
    FormActions,
    Spinner,
    Popover,
    Card,
    Dropdown,
    Modal,
    Alert,
    Badge,
    Avatar,
    Tabs,
    Progress,
    Toast
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
                Input::class,
                CardSection::class,
                Select::class,
                Form::class,
                FormGroup::class,
                FormActions::class,
                Spinner::class,
                Popover::class,
                Card::class,
                Dropdown::class,
                Modal::class,
                Alert::class,
                Badge::class,
                Avatar::class,
                Tabs::class,
                Progress::class,
                Toast::class
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
