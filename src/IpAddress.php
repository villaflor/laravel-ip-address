<?php


namespace Villaflor\IpAddress;


class IpAddress
{
    private const URL = 'https://worker.villaflor.one/get-ip';

    public static function getPublicIp(): string
    {
        return file_get_contents(self::URL);
    }
}