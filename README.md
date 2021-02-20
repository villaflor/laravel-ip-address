# IpAddress

A light and simple library to obtain the server's public IP Address. This library is useful in updating your DNS target
server IP Address if you are using a dynamic IP Address in hosting your server.

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
