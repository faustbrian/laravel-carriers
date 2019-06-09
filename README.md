# Laravel Carriers

[![Build Status](https://img.shields.io/travis/artisanry/Carriers/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Carriers)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/carriers.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Carriers.svg?style=flat-square)](https://github.com/artisanry/Carriers/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Carriers.svg?style=flat-square)](https://packagist.org/packages/artisanry/Carriers)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/carriers
```

To get started, you'll need to publish the vendor assets and migrate the carriers table:

```bash
php artisan vendor:publish --provider="Artisanry\Carriers\CarriersServiceProvider" && php artisan migrate
```

Now you can seed the carriers into the database like this.

```bash
php artisan carriers:seed
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
