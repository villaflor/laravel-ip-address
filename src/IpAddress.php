<?php


namespace Villaflor\IpAddress;


class IpAddress
{
    private const URL = 'http://ipecho.net/plain';

    public static function getPublicIp()
    {
        return file_get_contents("http://ipecho.net/plain");
    }
}