<?php

namespace ZedanLab\Paymob\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Orchestra\Testbench\TestCase as Orchestra;
use ZedanLab\Paymob\PaymobServiceProvider;

class TestCase extends Orchestra
{
    use WithFaker;
    use RefreshDatabase;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/create_paymob_transactions_table.php');
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
