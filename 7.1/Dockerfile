FROM ghcr.io/ghostwriter/php:7.1-composer

ENV XDEBUG_VERSION 2.9.8

RUN pecl install xdebug-$XDEBUG_VERSION \
    && docker-php-ext-enable xdebug
