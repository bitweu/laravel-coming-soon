# Laravel Coming Soon page

Very simple laravel package, to display "Coming soon" page

## Installation

You can install the package via composer:

```bash
composer require bitweu/coming-soon
```

## Usage

Publish package assets

```bash
vendor:publish --provider="Bitweu\ComingSoon\ComingSoonServiceProvider" --force --tag="assets"
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

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Background Image
Photo by Matteo Paganelli on Unsplash

More: [bitw.eu](https://www.bitw.eu)