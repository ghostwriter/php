# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

**Special thanks to [@mlocati](https://github.com/mlocati) for creating this fantastic tool [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer), which made all of this possible!**

> **Supported versions: [`8.6-dev`](#-use-php-86-dev-image-in-dockerfile), [`8.5`](#-use-php-85-image-in-dockerfile), [`8.4`](#-use-php-84-image-in-dockerfile), [`8.3`](#-use-php-83-image-in-dockerfile), [`8.2`](#-use-php-82-image-in-dockerfile), [`8.1`](#-use-php-81-image-in-dockerfile), [`8.0`](#-use-php-80-image-in-dockerfile), [`7.4`](#-use-php-74-image-in-dockerfile)**

## PHP 8.6-dev

#### ![Code](resource/icons/code.svg) Use `PHP 8.6-dev` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.6-dev
```
**CLI**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.6-dev-cli
```
**FPM**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.6-dev-fpm
```
**ZTS**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.6-dev-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.6-dev` image from the command line

**CLI with code coverage**
```sh
docker pull ghcr.io/ghostwriter/php:8.6-dev
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.6-dev php -v
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.6-dev-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.6-dev-cli php -v
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.6-dev-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.6-dev-fpm php -v
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.6-dev-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.6-dev-zts php -v
```

## PHP 8.5

#### ![Code](resource/icons/code.svg) Use `PHP 8.5` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5
```
**CLI**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-cli
```
**FPM**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-fpm
```
**ZTS**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.5` image from the command line

**CLI with code coverage**
```sh
docker pull ghcr.io/ghostwriter/php:8.5
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5 php -v
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.5-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5-cli php -v
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.5-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5-fpm php -v
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.5-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5-zts php -v
```

## PHP 8.4

#### ![Code](resource/icons/code.svg) Use `PHP 8.4` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4
```
**CLI**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-cli
```
**FPM**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-fpm
```
**ZTS**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.4` image from the command line

**CLI with code coverage**
```sh
docker pull ghcr.io/ghostwriter/php:8.4
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4 php -v
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.4-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-cli php -v
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.4-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-fpm php -v
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.4-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-zts php -v
```
