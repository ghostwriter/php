# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

**Special thanks to [@mlocati](https://github.com/mlocati) for creating the fantastic [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer) tool, which made all of this possible!**

> **Supported versions: [`8.4`](#-use-php-84-image-in-dockerfile), [`8.3`](#-use-php-83-image-in-dockerfile), [`8.2`](#-use-php-82-image-in-dockerfile), [`8.1`](#-use-php-81-image-in-dockerfile)**

## PHP 8.4

#### ![Code](resource/icons/code.svg) Use `PHP 8.4` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.4 # 8.4-cli with code coverage
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
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4 vendor/bin/phpunit
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.4-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-cli vendor/bin/phpunit
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.4-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-fpm vendor/bin/phpunit
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.4-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.4-zts vendor/bin/phpunit
```


## PHP 8.3

#### ![Code](resource/icons/code.svg) Use `PHP 8.3` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.3 # 8.3-cli with code coverage
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
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3 vendor/bin/phpunit
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.3-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-cli vendor/bin/phpunit
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.3-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-fpm vendor/bin/phpunit
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.3-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.3-zts vendor/bin/phpunit
```


## PHP 8.2

#### ![Code](resource/icons/code.svg) Use `PHP 8.2` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2 # 8.2-cli with code coverage
```
**CLI**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-cli
```
**FPM**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-fpm
```
**ZTS**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.2-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.2` image from the command line

**CLI with code coverage**
```sh
docker pull ghcr.io/ghostwriter/php:8.2
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2 vendor/bin/phpunit
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.2-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-cli vendor/bin/phpunit
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.2-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-fpm vendor/bin/phpunit
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.2-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.2-zts vendor/bin/phpunit
```


## PHP 8.1

#### ![Code](resource/icons/code.svg) Use `PHP 8.1` image in Dockerfile

**CLI with code coverage**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1 # 8.1-cli with code coverage
```
**CLI**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-cli
```
**FPM**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-fpm
```
**ZTS**
```Dockerfile
FROM ghcr.io/ghostwriter/php:8.1-zts
```

#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP 8.1` image from the command line

**CLI with code coverage**
```sh
docker pull ghcr.io/ghostwriter/php:8.1
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1 vendor/bin/phpunit
```
**CLI**
```sh
docker pull ghcr.io/ghostwriter/php:8.1-cli
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-cli vendor/bin/phpunit
```
**FPM**
```sh
docker pull ghcr.io/ghostwriter/php:8.1-fpm
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-fpm vendor/bin/phpunit
```
**ZTS**
```sh
docker pull ghcr.io/ghostwriter/php:8.1-zts
docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:8.1-zts vendor/bin/phpunit
```

