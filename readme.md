# Laravel MD5 Hash

[![Laravel MD5 Hash](https://github.com/matriphe/laravel-md5-hash/actions/workflows/master.yml/badge.svg)](https://github.com/matriphe/laravel-md5-hash/actions/workflows/master.yml)
[![Total Download](https://img.shields.io/packagist/dt/matriphe/laravel-md5-hash.svg)](https://packagist.org/packages/matriphe/laravel-md5-hash)
[![Latest Stable Version](https://img.shields.io/packagist/v/matriphe/laravel-md5-hash.svg)](https://packagist.org/packages/matriphe/laravel-md5-hash)

This package is used to **replace** Laravel default hash to support the old system that used MD5 for password hash.

> **Warning**
> Please use it at your own risk, since MD5 is not recommended to be used as a password hash.


## Installation

Using [Composer](https://getcomposer.org/), just run this command below.

```bash
composer require matriphe/laravel-md5-hash
```

For Laravel < 6, [please use version 1.1.1](https://github.com/matriphe/laravel-md5-hash/tree/1.1.1) and follow the
configuration instruction.

```bash
composer require matriphe/laravel-md5-hash:1.1.1
```

## Configuration

This package uses auto-discovery. Once it got installed, it will automatically replace the hash function to use MD5.

## Usage

Now you can use the built-in hash function using this command.

```php
Hash::make('password'); // return 5f4dcc3b5aa765d61d8327deb882cf99
bcrypt('password'); // return 5f4dcc3b5aa765d61d8327deb882cf99
```

## Contribution

All contributions are welcomed. Please create a pull request or merge request, and make sure all checks are passed ✅
before merging.

If the check failed on checking PHP style, please
run [`php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer) to fix it.

### Using Docker

```bash
docker run -it --rm -v $(pwd):/app -w /app oskarstark/php-cs-fixer-ga fix
```

### Local Dev

```bash
vendor/bin/php-cs-fixer fix
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
