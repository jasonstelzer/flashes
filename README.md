# flashes

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

This is a package for flash messages in Laravel 5.  It is based off of a tutorial by Jeffrey Way at [Laracasts](http://github.com/laracasts). More documentation coming soon.

## Install

In `app/config/app.php`, add the following lines:

In the *providers* array
````php
jstelz\Flashes\FlashesServiceProvider::class,
````

In the *aliases* array
````php
jstelz\Flashes\Flashes::class,
````

## Usage

``` php
Flashes::info('This is an informational message');
Flashes::success('This is a success message');
Flashes::warning('This is a warning message');
Flashes::error('This is an error message');
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits

- [Jason][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jasonstelzer/flashes.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thephpleague/flashes/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jasonstelzer/flashes.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jasonstelzer/flashes
[link-travis]: https://travis-ci.org/thephpleague/flashes
[link-downloads]: https://packagist.org/packages/jasonstelzer/flashes
[link-author]: https://github.com/jasonstelzer
[link-contributors]: ../../contributors
