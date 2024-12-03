<?php

namespace EcolePlus\EcolePlusUi\Tests;

use EcolePlus\EcolePlusUi\EcolePlusUiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            EcolePlusUiServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        // Perform any environment setup
    }
} 