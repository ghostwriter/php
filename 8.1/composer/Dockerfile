FROM ghcr.io/ghostwriter/php:8.1-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_VERSION 2.2.7

FROM composer:$COMPOSER_VERSION AS composer
COPY --from=composer /usr/bin/composer /usr/local/bin/composer
