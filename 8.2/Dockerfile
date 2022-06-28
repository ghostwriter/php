FROM ghcr.io/ghostwriter/php:8.2-composer

ENV XDEBUG_VERSION 3.1.5

RUN pecl install xdebug-$XDEBUG_VERSION \
    && docker-php-ext-enable xdebug
