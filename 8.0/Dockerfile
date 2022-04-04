FROM ghcr.io/ghostwriter/php:8.0-composer

ENV XDEBUG_VERSION 3.1.4

RUN pecl install xdebug-$XDEBUG_VERSION \
    && docker-php-ext-enable xdebug
