# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

> **Supported versions: [`8.5`](#php-85), [`8.4`](#php-84), [`8.3`](#php-83), [`8.2`](#php-82), [`8.1`](#php-81), [`8.0`](#php-80), [`7.4`](#php-74), [`7.3`](#php-73)**
>
> **Supported variants: [`cli`](#php-85-cli), [`fpm`](#php-85-fpm), [`zts`](#php-85-zts), [`frankenphp`](#php-85-frankenphp)**

## PHP 8.5

Use `PHP 8.5` image in Dockerfile or Pull & Run `PHP 8.5` image from the command line

### PHP `8.5` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5
```

```bash
docker pull ghcr.io/ghostwriter/php:8.5
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.5 php -v
```

### PHP `8.5-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:8.5-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.5-cli php -v
```

### PHP `8.5-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:8.5-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.5-fpm php -v
```

### PHP `8.5-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:8.5-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.5-zts php -v
```

### PHP `8.5-frankenphp`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-frankenphp
```

```bash
docker pull ghcr.io/ghostwriter/php:8.5-frankenphp
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.5-frankenphp php -v
```

## PHP 8.4

Use `PHP 8.4` image in Dockerfile or Pull & Run `PHP 8.4` image from the command line

### PHP `8.4` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4
```

```bash
docker pull ghcr.io/ghostwriter/php:8.4
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.4 php -v
```

### PHP `8.4-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:8.4-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.4-cli php -v
```

### PHP `8.4-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:8.4-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.4-fpm php -v
```

### PHP `8.4-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:8.4-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.4-zts php -v
```

### PHP `8.4-frankenphp`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-frankenphp
```

```bash
docker pull ghcr.io/ghostwriter/php:8.4-frankenphp
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.4-frankenphp php -v
```

## PHP 8.3

Use `PHP 8.3` image in Dockerfile or Pull & Run `PHP 8.3` image from the command line

### PHP `8.3` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3
```

```bash
docker pull ghcr.io/ghostwriter/php:8.3
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.3 php -v
```

### PHP `8.3-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:8.3-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.3-cli php -v
```

### PHP `8.3-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:8.3-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.3-fpm php -v
```

### PHP `8.3-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:8.3-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.3-zts php -v
```

### PHP `8.3-frankenphp`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-frankenphp
```

```bash
docker pull ghcr.io/ghostwriter/php:8.3-frankenphp
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.3-frankenphp php -v
```

## PHP 8.2

Use `PHP 8.2` image in Dockerfile or Pull & Run `PHP 8.2` image from the command line

### PHP `8.2` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2
```

```bash
docker pull ghcr.io/ghostwriter/php:8.2
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.2 php -v
```

### PHP `8.2-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:8.2-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.2-cli php -v
```

### PHP `8.2-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:8.2-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.2-fpm php -v
```

### PHP `8.2-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:8.2-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.2-zts php -v
```

### PHP `8.2-frankenphp`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-frankenphp
```

```bash
docker pull ghcr.io/ghostwriter/php:8.2-frankenphp
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.2-frankenphp php -v
```

## PHP 8.1

Use `PHP 8.1` image in Dockerfile or Pull & Run `PHP 8.1` image from the command line

### PHP `8.1` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1
```

```bash
docker pull ghcr.io/ghostwriter/php:8.1
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.1 php -v
```

### PHP `8.1-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:8.1-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.1-cli php -v
```

### PHP `8.1-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:8.1-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.1-fpm php -v
```

### PHP `8.1-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:8.1-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.1-zts php -v
```

## PHP 8.0

Use `PHP 8.0` image in Dockerfile or Pull & Run `PHP 8.0` image from the command line

### PHP `8.0` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.0
```

```bash
docker pull ghcr.io/ghostwriter/php:8.0
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.0 php -v
```

### PHP `8.0-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:8.0-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.0-cli php -v
```

### PHP `8.0-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:8.0-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.0-fpm php -v
```

### PHP `8.0-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.0-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:8.0-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:8.0-zts php -v
```

## PHP 7.4

Use `PHP 7.4` image in Dockerfile or Pull & Run `PHP 7.4` image from the command line

### PHP `7.4` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.4
```

```bash
docker pull ghcr.io/ghostwriter/php:7.4
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.4 php -v
```

### PHP `7.4-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:7.4-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.4-cli php -v
```

### PHP `7.4-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:7.4-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.4-fpm php -v
```

### PHP `7.4-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.4-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:7.4-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.4-zts php -v
```

## PHP 7.3

Use `PHP 7.3` image in Dockerfile or Pull & Run `PHP 7.3` image from the command line

### PHP `7.3` CLI with Xdebug

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.3
```

```bash
docker pull ghcr.io/ghostwriter/php:7.3
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.3 php -v
```

### PHP `7.3-cli`

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-cli
```

```bash
docker pull ghcr.io/ghostwriter/php:7.3-cli
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.3-cli php -v
```

### PHP `7.3-fpm`

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-fpm
```

```bash
docker pull ghcr.io/ghostwriter/php:7.3-fpm
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.3-fpm php -v
```

### PHP `7.3-zts`

```Dockerfile
FROM ghcr.io/ghostwriter/php:7.3-zts
```

```bash
docker pull ghcr.io/ghostwriter/php:7.3-zts
```

```bash
docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:7.3-zts php -v
```
