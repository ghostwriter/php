# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

**Special thanks to [@mlocati](https://github.com/mlocati) for creating the fantastic [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer) tool, which made all of this possible!**

> **Supported versions: 8.3, 8.2, 8.1, 8.0, 7.4, 7.3**

## PHP 8.3

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3
```

## PHP 8.3 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-cli
```

## PHP 8.3 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-fpm
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-fpm vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-fpm
```

## PHP 8.3 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-composer vendor/bin/phpunit
```

## PHP 8.3 : MYSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-mysql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-mysql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-mysql
```

## PHP 8.3 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-pgsql
```

## PHP 8.3 : BLACKFIRE

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-blackfire
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-blackfire vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-blackfire
```

## PHP 8.3 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-pcov
```

## PHP 8.3 : XDEBUG

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-xdebug
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-xdebug vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-xdebug
```

## PHP 8.2

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2
```

## PHP 8.2 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-cli
```

## PHP 8.2 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-fpm
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-fpm vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-fpm
```

## PHP 8.2 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-composer vendor/bin/phpunit
```

## PHP 8.2 : MYSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-mysql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-mysql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-mysql
```

## PHP 8.2 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-pgsql
```

## PHP 8.2 : BLACKFIRE

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-blackfire
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-blackfire vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-blackfire
```

## PHP 8.2 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-pcov
```

## PHP 8.2 : XDEBUG

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.2 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-xdebug
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-xdebug vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.2 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-xdebug
```

## PHP 8.1

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1
```

## PHP 8.1 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-cli
```

## PHP 8.1 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-fpm
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-fpm vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-fpm
```

## PHP 8.1 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-composer vendor/bin/phpunit
```

## PHP 8.1 : MYSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-mysql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-mysql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-mysql
```

## PHP 8.1 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-pgsql
```

## PHP 8.1 : BLACKFIRE

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-blackfire
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-blackfire vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-blackfire
```

## PHP 8.1 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-pcov
```

## PHP 8.1 : XDEBUG

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.1 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-xdebug
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-xdebug vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.1 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-xdebug
```

## PHP 8.0

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0
```

## PHP 8.0 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-cli
```

## PHP 8.0 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-fpm
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-fpm vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-fpm
```

## PHP 8.0 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-composer vendor/bin/phpunit
```

## PHP 8.0 : MYSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-mysql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-mysql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-mysql
```

## PHP 8.0 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-pgsql
```

## PHP 8.0 : BLACKFIRE

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-blackfire
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-blackfire vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-blackfire
```

## PHP 8.0 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-pcov
```

## PHP 8.0 : XDEBUG

### ![Terminal](icons/terminal.svg) Pull & Run PHP 8.0 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-xdebug
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-xdebug vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 8.0 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-xdebug
```

## PHP 7.4

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4
```

## PHP 7.4 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-cli
```

## PHP 7.4 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-fpm
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-fpm vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-fpm
```

## PHP 7.4 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-composer vendor/bin/phpunit
```

## PHP 7.4 : MYSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-mysql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-mysql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-mysql
```

## PHP 7.4 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-pgsql
```

## PHP 7.4 : BLACKFIRE

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-blackfire
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-blackfire vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-blackfire
```

## PHP 7.4 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-pcov
```

## PHP 7.4 : XDEBUG

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.4 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-xdebug
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-xdebug vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.4 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-xdebug
```

## PHP 7.3

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3
```

## PHP 7.3 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-cli
```

## PHP 7.3 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-fpm
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-fpm vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-fpm
```

## PHP 7.3 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-composer vendor/bin/phpunit
```

## PHP 7.3 : MYSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-mysql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-mysql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-mysql
```

## PHP 7.3 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-pgsql
```

## PHP 7.3 : BLACKFIRE

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-blackfire
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-blackfire vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-blackfire
```

## PHP 7.3 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-pcov
```

## PHP 7.3 : XDEBUG

### ![Terminal](icons/terminal.svg) Pull & Run PHP 7.3 image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-xdebug
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-xdebug vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use PHP 7.3 image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-xdebug
```

