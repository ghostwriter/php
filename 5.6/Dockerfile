FROM ghcr.io/ghostwriter/php:5.6-composer

ENV XDEBUG_VERSION 2.5.5

RUN pecl install xdebug-$XDEBUG_VERSION \
    && docker-php-ext-enable xdebug
