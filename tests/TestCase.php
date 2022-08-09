<?php

namespace ZedanLab\Paymob\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use ZedanLab\Paymob\PaymobServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            PaymobServiceProvider::class,
        ];
    }
}
