# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

## ![Terminal](icons/terminal.svg) Pull image from the command line

``` sh
docker pull ghcr.io/ghostwriter/php:5.6
docker pull ghcr.io/ghostwriter/php:5.6-cli
docker pull ghcr.io/ghostwriter/php:5.6-composer
docker pull ghcr.io/ghostwriter/php:5.6-fpm

docker pull ghcr.io/ghostwriter/php:7.4
docker pull ghcr.io/ghostwriter/php:7.4-cli
docker pull ghcr.io/ghostwriter/php:7.4-composer
docker pull ghcr.io/ghostwriter/php:7.4-fpm

docker pull ghcr.io/ghostwriter/php:8.0
docker pull ghcr.io/ghostwriter/php:8.0-cli
docker pull ghcr.io/ghostwriter/php:8.0-composer
docker pull ghcr.io/ghostwriter/php:8.0-fpm

docker pull ghcr.io/ghostwriter/php:8.1
docker pull ghcr.io/ghostwriter/php:8.1-cli
docker pull ghcr.io/ghostwriter/php:8.1-composer
docker pull ghcr.io/ghostwriter/php:8.1-fpm
```

### ![Code](icons/code.svg) Use as base image in DockerFile

``` Dockerfile
FROM ghcr.io/ghostwriter/php:5.6
FROM ghcr.io/ghostwriter/php:5.6-cli
FROM ghcr.io/ghostwriter/php:5.6-composer
FROM ghcr.io/ghostwriter/php:5.6-fpm

FROM ghcr.io/ghostwriter/php:7.4
FROM ghcr.io/ghostwriter/php:7.4-cli
FROM ghcr.io/ghostwriter/php:7.4-composer
FROM ghcr.io/ghostwriter/php:7.4-fpm

FROM ghcr.io/ghostwriter/php:8.0
FROM ghcr.io/ghostwriter/php:8.0-cli
FROM ghcr.io/ghostwriter/php:8.0-composer
FROM ghcr.io/ghostwriter/php:8.0-fpm

FROM ghcr.io/ghostwriter/php:8.1
FROM ghcr.io/ghostwriter/php:8.1-cli
FROM ghcr.io/ghostwriter/php:8.1-composer
FROM ghcr.io/ghostwriter/php:8.1-fpm
```
