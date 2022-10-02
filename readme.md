# Laravel MD5 Hash

![Laravel md5 Hash](https://github.com/matriphe/laravel-md5-hash/workflows/Laravel%20md5%20Hash/badge.svg)
[![Total Download](https://img.shields.io/packagist/dt/matriphe/laravel-md5-hash.svg)](https://packagist.org/packages/matriphe/laravel-md5-hash)
[![Latest Stable Version](https://img.shields.io/packagist/v/matriphe/laravel-md5-hash.svg)](https://packagist.org/packages/matriphe/laravel-md5-hash)

This package is used to **replace** Laravel default hash to support old system that used MD5 for password hash.

> **Warning**
> Please use it with your own risk, since MD5 is not recommended to be used as password hash.


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

Now you can use built-in hash function using this command.

```php
Hash::make('password'); // return 5f4dcc3b5aa765d61d8327deb882cf99
bcrypt('password'); // return 5f4dcc3b5aa765d61d8327deb882cf99
```
 
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
