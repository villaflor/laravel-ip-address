<?php


namespace Villaflor\IpAddress\Tests\Feature;


use Villaflor\IpAddress\IpAddress;
use Villaflor\IpAddress\Tests\TestCase;

class IpAddressTest extends TestCase
{
    public function test_can_get_public_ip_address()
    {
        $publicIp = IpAddress::getPublicIp();

        $this->assertNotEmpty($publicIp);
    }
}