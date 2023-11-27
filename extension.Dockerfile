ARG PHP_VERSION=8.3
ARG PHP_EXTENSION=xdebug

FROM ghcr.io/ghostwriter/php:${PHP_VERSION}-composer

ARG PHP_EXTENSION

RUN install-php-extensions ${PHP_EXTENSION};

RUN php -m | grep ${PHP_EXTENSION}
