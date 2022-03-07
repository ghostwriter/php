FROM ghcr.io/ghostwriter/php:7.4-base

LABEL org.opencontainers.image.source = "https://github.com/ghostwriter/php"

ENV XDEBUG_VERSION 3.0.3

RUN pecl install xdebug-$XDEBUG_VERSION \
    && docker-php-ext-enable xdebug
