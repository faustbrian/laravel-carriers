# Laravel Carriers

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-carriers
```

And then include the service provider within `app/config/app.php`.

``` php
BrianFaust\Carriers\CarriersServiceProvider::class
```

To get started, you'll need to publish the vendor assets and migrate the carriers table:

```bash
php artisan vendor:publish --provider="BrianFaust\Carriers\CarriersServiceProvider" && php artisan migrate
```

Now you can seed the carriers into the database like this.

```bash
php artisan carriers:seed
```

## Usage

``` php
...
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
