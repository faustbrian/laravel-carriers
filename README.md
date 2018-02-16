# Laravel Carriers

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Carriers/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Carriers)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-carriers.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Carriers.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Carriers/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Carriers.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Carriers)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-carriers
```

To get started, you'll need to publish the vendor assets and migrate the carriers table:

```bash
php artisan vendor:publish --provider="BrianFaust\Carriers\CarriersServiceProvider" && php artisan migrate
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

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
