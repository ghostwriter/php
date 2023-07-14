# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

## PHP 8.3-rc

### ![Terminal](icons/terminal.svg) Pull PHP 8.3-rc image from the command line

``` sh
# PHP CLI
docker pull ghcr.io/ghostwriter/php:8.3-rc
docker pull ghcr.io/ghostwriter/php:8.3-rc-cli

# PHP FPM
docker pull ghcr.io/ghostwriter/php:8.3-rc-fpm

# PHP CLI with Composer
docker pull ghcr.io/ghostwriter/php:8.3-rc-composer

# PHP CLI with Composer && Database
docker pull ghcr.io/ghostwriter/php:8.3-rc-mysql
docker pull ghcr.io/ghostwriter/php:8.3-rc-pgsql

# PHP CLI with Composer & Swoole
docker pull ghcr.io/ghostwriter/php:8.3-rc-swoole

# PHP CLI with Composer & code coverage
docker pull ghcr.io/ghostwriter/php:8.3-rc-pcov
docker pull ghcr.io/ghostwriter/php:8.3-rc-xdebug
```

### ![Code](icons/code.svg) Use as base PHP 8.3-rc image in DockerFile

``` Dockerfile
# PHP CLI
FROM ghcr.io/ghostwriter/php:8.3-rc
FROM ghcr.io/ghostwriter/php:8.3-rc-cli

# PHP FPM
FROM ghcr.io/ghostwriter/php:8.3-rc-fpm

# PHP CLI with Composer
FROM ghcr.io/ghostwriter/php:8.3-rc-composer

# PHP CLI with Composer && Database
FROM ghcr.io/ghostwriter/php:8.3-rc-mysql
FROM ghcr.io/ghostwriter/php:8.3-rc-pgsql

# PHP CLI with Composer & Swoole
FROM ghcr.io/ghostwriter/php:8.3-rc-swoole

# PHP CLI with Composer & code coverage
FROM ghcr.io/ghostwriter/php:8.3-rc-pcov
FROM ghcr.io/ghostwriter/php:8.3-rc-xdebug
```

## PHP 8.2

### ![Terminal](icons/terminal.svg) Pull PHP 8.2 image from the command line

``` sh
# PHP CLI
docker pull ghcr.io/ghostwriter/php:8.2
docker pull ghcr.io/ghostwriter/php:8.2-cli

# PHP FPM
docker pull ghcr.io/ghostwriter/php:8.2-fpm

# PHP CLI with Composer
docker pull ghcr.io/ghostwriter/php:8.2-composer

# PHP CLI with Composer && Database
docker pull ghcr.io/ghostwriter/php:8.2-mysql
docker pull ghcr.io/ghostwriter/php:8.2-pgsql

# PHP CLI with Composer & Swoole
docker pull ghcr.io/ghostwriter/php:8.2-swoole

# PHP CLI with Composer & code coverage
docker pull ghcr.io/ghostwriter/php:8.2-pcov
docker pull ghcr.io/ghostwriter/php:8.2-xdebug
```

### ![Code](icons/code.svg) Use as base PHP 8.2 image in DockerFile

``` Dockerfile
# PHP CLI
FROM ghcr.io/ghostwriter/php:8.2
FROM ghcr.io/ghostwriter/php:8.2-cli

# PHP FPM
FROM ghcr.io/ghostwriter/php:8.2-fpm

# PHP CLI with Composer
FROM ghcr.io/ghostwriter/php:8.2-composer

# PHP CLI with Composer && Database
FROM ghcr.io/ghostwriter/php:8.2-mysql
FROM ghcr.io/ghostwriter/php:8.2-pgsql

# PHP CLI with Composer & Swoole
FROM ghcr.io/ghostwriter/php:8.2-swoole

# PHP CLI with Composer & code coverage
FROM ghcr.io/ghostwriter/php:8.2-pcov
FROM ghcr.io/ghostwriter/php:8.2-xdebug
```

## PHP 8.1

### ![Terminal](icons/terminal.svg) Pull PHP 8.1 image from the command line

``` sh
# PHP CLI
docker pull ghcr.io/ghostwriter/php:8.1
docker pull ghcr.io/ghostwriter/php:8.1-cli

# PHP FPM
docker pull ghcr.io/ghostwriter/php:8.1-fpm

# PHP CLI with Composer
docker pull ghcr.io/ghostwriter/php:8.1-composer

# PHP CLI with Composer && Database
docker pull ghcr.io/ghostwriter/php:8.1-mysql
docker pull ghcr.io/ghostwriter/php:8.1-pgsql

# PHP CLI with Composer & Swoole
docker pull ghcr.io/ghostwriter/php:8.1-swoole

# PHP CLI with Composer & code coverage
docker pull ghcr.io/ghostwriter/php:8.1-pcov
docker pull ghcr.io/ghostwriter/php:8.1-xdebug
```

### ![Code](icons/code.svg) Use as base PHP 8.1 image in DockerFile

``` Dockerfile
# PHP CLI
FROM ghcr.io/ghostwriter/php:8.1
FROM ghcr.io/ghostwriter/php:8.1-cli

# PHP FPM
FROM ghcr.io/ghostwriter/php:8.1-fpm

# PHP CLI with Composer
FROM ghcr.io/ghostwriter/php:8.1-composer

# PHP CLI with Composer && Database
FROM ghcr.io/ghostwriter/php:8.1-mysql
FROM ghcr.io/ghostwriter/php:8.1-pgsql

# PHP CLI with Composer & Swoole
FROM ghcr.io/ghostwriter/php:8.1-swoole

# PHP CLI with Composer & code coverage
FROM ghcr.io/ghostwriter/php:8.1-pcov
FROM ghcr.io/ghostwriter/php:8.1-xdebug
```

## PHP 8.0

### ![Terminal](icons/terminal.svg) Pull PHP 8.0 image from the command line

``` sh
# PHP CLI
docker pull ghcr.io/ghostwriter/php:8.0
docker pull ghcr.io/ghostwriter/php:8.0-cli

# PHP FPM
docker pull ghcr.io/ghostwriter/php:8.0-fpm

# PHP CLI with Composer
docker pull ghcr.io/ghostwriter/php:8.0-composer

# PHP CLI with Composer && Database
docker pull ghcr.io/ghostwriter/php:8.0-mysql
docker pull ghcr.io/ghostwriter/php:8.0-pgsql

# PHP CLI with Composer & Swoole
docker pull ghcr.io/ghostwriter/php:8.0-swoole

# PHP CLI with Composer & code coverage
docker pull ghcr.io/ghostwriter/php:8.0-pcov
docker pull ghcr.io/ghostwriter/php:8.0-xdebug
```

### ![Code](icons/code.svg) Use as base PHP 8.0 image in DockerFile

``` Dockerfile
# PHP CLI
FROM ghcr.io/ghostwriter/php:8.0
FROM ghcr.io/ghostwriter/php:8.0-cli

# PHP FPM
FROM ghcr.io/ghostwriter/php:8.0-fpm

# PHP CLI with Composer
FROM ghcr.io/ghostwriter/php:8.0-composer

# PHP CLI with Composer && Database
FROM ghcr.io/ghostwriter/php:8.0-mysql
FROM ghcr.io/ghostwriter/php:8.0-pgsql

# PHP CLI with Composer & Swoole
FROM ghcr.io/ghostwriter/php:8.0-swoole

# PHP CLI with Composer & code coverage
FROM ghcr.io/ghostwriter/php:8.0-pcov
FROM ghcr.io/ghostwriter/php:8.0-xdebug
```
