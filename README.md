# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

**Special thanks to [@mlocati](https://github.com/mlocati) for creating the fantastic [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer) tool, which made all of this possible!**

> **Supported versions: 8.4, 8.3, 8.2, 8.1, 8.0, 7.4, 7.3**

## PHP 8.4

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.4` image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.4
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.4` image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.4
```

## PHP 8.4 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.4` cli image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.4-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.4` cli image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-cli
```

## PHP 8.4 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.4` fpm image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.4-fpm
```

### ![Code](icons/code.svg) Use `PHP 8.4` fpm image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-fpm
```

## PHP 8.4 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.4` composer image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.4-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-composer vendor/bin/phpunit
```

## PHP 8.4 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.4` pgsql image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.4-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.4` pgsql image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-pgsql
```

## PHP 8.4 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.4` pcov image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.4-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.4` pcov image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-pcov
```

## PHP 8.3

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.3` image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.3` image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3
```

## PHP 8.3 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.3` cli image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.3` cli image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-cli
```

## PHP 8.3 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.3` fpm image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-fpm
```

### ![Code](icons/code.svg) Use `PHP 8.3` fpm image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-fpm
```

## PHP 8.3 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.3` composer image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-composer vendor/bin/phpunit
```

## PHP 8.3 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.3` pgsql image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.3` pgsql image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-pgsql
```

## PHP 8.3 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.3` pcov image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.3-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.3` pcov image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-pcov
```

## PHP 8.2

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.2` image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.2` image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2
```

## PHP 8.2 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.2` cli image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.2` cli image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-cli
```

## PHP 8.2 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.2` fpm image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-fpm
```

### ![Code](icons/code.svg) Use `PHP 8.2` fpm image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-fpm
```

## PHP 8.2 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.2` composer image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-composer vendor/bin/phpunit
```

## PHP 8.2 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.2` pgsql image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.2` pgsql image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-pgsql
```

## PHP 8.2 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.2` pcov image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.2-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.2` pcov image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-pcov
```

## PHP 8.1

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.1` image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.1` image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1
```

## PHP 8.1 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.1` cli image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.1` cli image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-cli
```

## PHP 8.1 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.1` fpm image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-fpm
```

### ![Code](icons/code.svg) Use `PHP 8.1` fpm image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-fpm
```

## PHP 8.1 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.1` composer image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-composer vendor/bin/phpunit
```

## PHP 8.1 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.1` pgsql image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.1` pgsql image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-pgsql
```

## PHP 8.1 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.1` pcov image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.1-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.1` pcov image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-pcov
```

## PHP 8.0

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.0` image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.0` image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0
```

## PHP 8.0 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.0` cli image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.0` cli image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-cli
```

## PHP 8.0 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.0` fpm image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-fpm
```

### ![Code](icons/code.svg) Use `PHP 8.0` fpm image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-fpm
```

## PHP 8.0 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.0` composer image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-composer vendor/bin/phpunit
```

## PHP 8.0 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.0` pgsql image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.0` pgsql image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-pgsql
```

## PHP 8.0 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 8.0` pcov image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:8.0-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.0-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 8.0` pcov image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-pcov
```

## PHP 7.4

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.4` image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.4` image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4
```

## PHP 7.4 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.4` cli image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.4` cli image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-cli
```

## PHP 7.4 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.4` fpm image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-fpm
```

### ![Code](icons/code.svg) Use `PHP 7.4` fpm image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-fpm
```

## PHP 7.4 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.4` composer image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-composer vendor/bin/phpunit
```

## PHP 7.4 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.4` pgsql image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.4` pgsql image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-pgsql
```

## PHP 7.4 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.4` pcov image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.4-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.4-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.4` pcov image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-pcov
```

## PHP 7.3

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.3` image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3 vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.3` image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3
```

## PHP 7.3 : CLI

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.3` cli image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-cli
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-cli vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.3` cli image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-cli
```

## PHP 7.3 : FPM

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.3` fpm image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-fpm
```

### ![Code](icons/code.svg) Use `PHP 7.3` fpm image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-fpm
```

## PHP 7.3 : COMPOSER

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.3` composer image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-composer
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-composer vendor/bin/phpunit
```

## PHP 7.3 : PGSQL

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.3` pgsql image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-pgsql
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-pgsql vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.3` pgsql image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-pgsql
```

## PHP 7.3 : PCOV

### ![Terminal](icons/terminal.svg) Pull & Run `PHP 7.3` pcov image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:7.3-pcov
```

``` sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:7.3-pcov vendor/bin/phpunit
```

### ![Code](icons/code.svg) Use `PHP 7.3` pcov image in Dockerfile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-pcov
```
