


# This is my package laravel-paymob

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ZedanLab/laravel-paymob.svg?style=flat-square)](https://packagist.org/packages/ZedanLab/laravel-paymob)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ZedanLab/laravel-paymob/run-tests?label=tests)](https://github.com/ZedanLab/laravel-paymob/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ZedanLab/laravel-paymob/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ZedanLab/laravel-paymob/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ZedanLab/laravel-paymob.svg?style=flat-square)](https://packagist.org/packages/ZedanLab/laravel-paymob)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.



## Installation

You can install the package via composer:

```bash
composer require ZedanLab/laravel-paymob
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-paymob-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-paymob-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-paymob-views"
```

## Usage

```php
$paymob = new ZedanLab\Paymob();
echo $paymob->echoPhrase('Hello, ZedanLab!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mohamed Zedan](https://github.com/ZedanLab)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
