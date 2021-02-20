# IpAddress

A light and simple library to obtain the server's public IP Address. This library is useful in updating your DNS target
server IP Address if you are using a dynamic IP Address in hosting your server.

<p align="center">
  <a href="https://travis-ci.org/github/villaflor/laravel-ip-address">
    <img src="https://img.shields.io/travis/villaflor/laravel-ip-address.svg?style=flat">
  </a>
  <a href="https://github.com/villaflor/laravel-ip-address/blob/main/LICENSE">
    <img src="https://img.shields.io/github/license/villaflor/laravel-ip-address.svg?style=flat">
  </a>
  <a href="https://travis-ci.org/github/villaflor/laravel-ip-address">
    <img src="https://img.shields.io/packagist/php-v/villaflor/laravel-ip-address">
  </a>
  <a href="https://packagist.org/packages/villaflor/laravel-ip-address">
    <img src="https://img.shields.io/packagist/v/villaflor/laravel-ip-address">
  </a>
</p>

## Installation

```bash
composer require villaflor/laravel-ip-address
```

## Usage

It is very easy to use this library. Here is an example of printing the public IP Address of a server.

```php
use Villaflor\IpAddress\IpAddress;

public function printPublicIpAddress(): void
{
    $publicIp = IpAddress::getPublicIp();
    
    echo $publicIp;
}
```
