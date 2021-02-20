<?php


namespace Villaflor\IpAddress\Tests\Feature;


use Villaflor\IpAddress\IpAddress;
use Villaflor\IpAddress\Tests\TestCase;

class IpAddressTest extends TestCase
{
    public function test_can_get_public_ip_address(): void
    {
        $publicIp = IpAddress::getPublicIp();

        self::assertNotEmpty($publicIp);
        self::assertTrue(is_string($publicIp));
        self::assertMatchesRegularExpression("/(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])/", $publicIp);
    }
}