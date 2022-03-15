FROM ghcr.io/ghostwriter/php:7.0-composer

ENV XDEBUG_VERSION 2.7.2

RUN pecl install xdebug-$XDEBUG_VERSION \
    && docker-php-ext-enable xdebug
