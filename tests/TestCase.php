<?php

namespace Kanagama\BladeDirectives\Tests;

use Kanagama\BladeDirectives\BladeDirectivesServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BladeDirectivesServiceProvider::class,
        ];
    }
}