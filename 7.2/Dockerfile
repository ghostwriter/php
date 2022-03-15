FROM ghcr.io/ghostwriter/php:7.2-composer

ENV XDEBUG_VERSION 3.1.3

RUN pecl install xdebug-$XDEBUG_VERSION \
    && docker-php-ext-enable xdebug
