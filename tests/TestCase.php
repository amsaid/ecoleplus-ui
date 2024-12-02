<?php

namespace Ecoleplus\EcoleplusUi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Ecoleplus\EcoleplusUi\EcoleplusUiServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

    }

    protected function getPackageProviders($app)
    {
        return [
            EcoleplusUiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {


    }
}
