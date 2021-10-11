# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/epmnzava/connectreseller-laravel.svg?style=flat-square)](https://packagist.org/packages/epmnzava/connectreseller-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/epmnzava/connectreseller-laravel.svg?style=flat-square)](https://packagist.org/packages/epmnzava/connectreseller-laravel)
[![Emmanuel Mnzava](https://img.shields.io/badge/Author-Emmanuel%20Mnzava-green)](mailto:epmnzava@gmail.com)


ConnectReseller is a reseller arm for OwnRegistrar Inc. an ICANN Accredited Domain Name Registrar. This package is a wrapper of connectreseller service.

## Features

# [Domain Availability Check](#domain-availability-check)

# [Domain Registration](#domain-registration-1)


## Installation

## Version Matrix

Version | Laravel   | PHP Version
------- | --------- | ------------
1.0.0   | 8.0       | >= 8.0 
1.0.1   | 8.0       | >= 7.3 >= 8.0
1.0.2   | 8.0       | >= 7.2.5 >= 8.0

You can install the package via composer:

```bash
composer require epmnzava/connectreseller-laravel
```
## Update your config (for Laravel 5.4 and below)

Add the service provider to the providers array in config/app.php:

```php
 Epmnzava\ConnectresellerLaravel\ConnectresellerLaravelServiceProvider::class,
```
Add the facade to the aliases array in config/app.php:

```php
'DomainApi' => Epmnzava\ConnectresellerLaravel\ConnectresellerLaravelFacade::class,
```

## Publish the package configuration (for Laravel 5.4 and below)

Publish the configuration file and migrations by running the provided console command:

```bash
php artisan vendor:publish --provider="Epmnzava\ConnectresellerLaravel\ConnectresellerLaravelServiceProvider"
```

## Usage

# Domain Availability Check 

```php
domain_exits($domain)
```

checks if a domain exists returns true if it exists and false if it does not exit



``` php
//Request

 $domainapi = new DomainApi;

 if($domainapi->domian_exists($domain)){
 	//yes domain exitsts
 }
 else
 {
 	//no domain does not exists
 }


```


# Domain Registration

domain_register(string $domain_name, string $duration, string $iswhoidprotection, string $ns1, string $ns2);

Functionality needed to register a domain 



``` php
//Request

 $domainapi = new DomainApi;

 $response=$domainapi->domain_register($domain_name, 1, true, "ns1.storewid.com", "ns2.storewid.com");


```





### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email epmnzava@gmail.com instead of using the issue tracker.

## Credits

- [Emmanuel Mnzava](https://github.com/dbrax)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

