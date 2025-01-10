# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

**Special thanks to [@mlocati](https://github.com/mlocati) for creating the fantastic [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer) tool, which made all of this possible!**

> **Supported versions: [`8.4`](#-use-php-84-image-in-dockerfile), [`8.3`](#-use-php-83-image-in-dockerfile), [`8.2`](#-use-php-82-image-in-dockerfile), [`8.1`](#-use-php-81-image-in-dockerfile)**

### PHP 8.4

#### ![Code](resource/icons/code.svg) Use `PHP 8.4` image in Dockerfile

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4 # 8.4-cli with code coverage
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-cli
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-fpm
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.4` image from the command line

```sh
docker pull ghcr.io/ghostwriter/php:8.4
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4 vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.4-cli
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-cli vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.4-fpm
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-fpm vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.4-zts
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-zts vendor/bin/phpunit
```


### PHP 8.3

#### ![Code](resource/icons/code.svg) Use `PHP 8.3` image in Dockerfile

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3 # 8.3-cli with code coverage
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-cli
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-fpm
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.3` image from the command line

```sh
docker pull ghcr.io/ghostwriter/php:8.3
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3 vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.3-cli
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-cli vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.3-fpm
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-fpm vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.3-zts
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-zts vendor/bin/phpunit
```


### PHP 8.2

#### ![Code](resource/icons/code.svg) Use `PHP 8.2` image in Dockerfile

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2 # 8.2-cli with code coverage
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-cli
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-fpm
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.2` image from the command line

```sh
docker pull ghcr.io/ghostwriter/php:8.2
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2 vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.2-cli
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-cli vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.2-fpm
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-fpm vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.2-zts
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-zts vendor/bin/phpunit
```


### PHP 8.1

#### ![Code](resource/icons/code.svg) Use `PHP 8.1` image in Dockerfile

```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1 # 8.1-cli with code coverage
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-cli
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-fpm
```
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.1` image from the command line

```sh
docker pull ghcr.io/ghostwriter/php:8.1
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1 vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.1-cli
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-cli vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.1-fpm
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-fpm vendor/bin/phpunit
```
```sh
docker pull ghcr.io/ghostwriter/php:8.1-zts
```
```sh
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-zts vendor/bin/phpunit
```

