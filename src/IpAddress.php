<?php


namespace Villaflor\IpAddress;


class IpAddress
{
    private const URL = 'https://ip.villaflor.workers.dev';

    public static function getPublicIp()
    {
        return file_get_contents(self::URL);
    }
}