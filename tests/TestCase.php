<?php


namespace Villaflor\IpAddress\Tests;


use Illuminate\Foundation\Application;
use Villaflor\IpAddress\IpAddressServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Override application aliases.
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            IpAddressServiceProvider::class,
        ];
    }
}