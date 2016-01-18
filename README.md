# Laravel Carriers

## Installation

First, pull in the package through Composer.

```js
composer require draperstudio/laravel-carriers:1.0.*@dev
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    'DraperStudio\Carriers\ServiceProvider'
];
```

To get started, you'll need to publish the vendor assets and migrate the carriers table:

```bash
php artisan vendor:publish --provider="DraperStudio\Carriers\ServiceProvider" && php artisan migrate
```

Now you can seed the carriers into the database like this.

```bash
php artisan carriers:seed
```
