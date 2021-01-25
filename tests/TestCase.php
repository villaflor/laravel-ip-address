<?php


namespace Villaflor\IpAddress\Tests;


use Villaflor\IpAddress\IpAddressServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Override application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            IpAddressServiceProvider::class,
        ];
    }
}