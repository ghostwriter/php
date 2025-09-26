# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

**Special thanks to [@mlocati](https://github.com/mlocati) for creating this fantastic tool [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer), which made all of this possible!**

> **Supported versions: [`8.5-rc`](#-use-php-85-rc-image-in-dockerfile), [`8.4`](#-use-php-84-image-in-dockerfile), [`8.3`](#-use-php-83-image-in-dockerfile), [`8.2`](#-use-php-82-image-in-dockerfile), [`8.1`](#-use-php-81-image-in-dockerfile), [`8.0`](#-use-php-80-image-in-dockerfile), [`7.4`](#-use-php-74-image-in-dockerfile)**

## PHP 8.5-rc

#### ![Code](resource/icons/code.svg) Use `PHP 8.5-rc` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-rc
```
**CLI**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-rc-cli
```
**FPM**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-rc-fpm
```
**ZTS**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.5-rc-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.5-rc` image from the command line

**CLI with code coverage**
```sh
docker pull ghcr.io/ghostwriter/php:8.5-rc
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5-rc php -v
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.5-rc-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5-rc-cli php -v
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.5-rc-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5-rc-fpm php -v
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.5-rc-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.5-rc-zts php -v
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

## PHP 8.3

#### ![Code](resource/icons/code.svg) Use `PHP 8.3` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3
```
**CLI**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-cli
```
**FPM**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-fpm
```
**ZTS**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.3` image from the command line

**CLI with code coverage**
```sh
docker pull ghcr.io/ghostwriter/php:8.3
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3 php -v
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.3-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-cli php -v
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.3-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-fpm php -v
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.3-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-zts php -v
```
