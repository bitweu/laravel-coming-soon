# Laravel Coming Soon page

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bitweu/coming-soon.svg?style=flat-square)](https://packagist.org/packages/bitweu/coming-soon)
[![Total Downloads](https://img.shields.io/packagist/dt/bitweu/coming-soon.svg?style=flat-square)](https://packagist.org/packages/bitweu/coming-soon)
[![Build Status](https://travis-ci.org/bitweu/laravel-coming-soon.svg?branch=master)](https://travis-ci.org/bitweu/laravel-coming-soon)

![laravel-comingsoon](https://i.imgur.com/KCLCJIx.jpg "coming soon page")

Very simple laravel package, to display "Coming soon" page

## Installation

You can install the package via composer:

```bash
composer require bitweu/coming-soon
```

## Usage

Publish package assets

```bash
php artisan vendor:publish --provider="Bitweu\ComingSoon\ComingSoonServiceProvider" --force --tag="assets"
```

Register "Coming soon" view in your `web.php` routes file
```php
Route::get('/', function () {
    return view('coming-soon::coming-soon');
});
```

### Testing

``` bash
composer test
```

## Background Image
Photo by Matteo Paganelli on Unsplash

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

More about bitw team: [bitw.eu](https://www.bitw.eu)
