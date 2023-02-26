# Laravel Custom Domains

A package to connect the Cloudflare custom domain service to a Laravel application.
## Installation

You can install the package via composer:

```bash
composer require danpalmieri/laravel-custom-domains
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="custom-domains-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="custom-domains-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="custom-domains-views"
```

## Usage

```php
$variable = new VendorName\Skeleton();
echo $variable->echoPhrase('Hello, VendorName!');
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Dan Palmieri](https://github.com/danpalmieri)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
