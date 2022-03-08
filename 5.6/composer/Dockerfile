FROM ghcr.io/ghostwriter/php:5.6-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_1_VERSION 1.10.24
ENV COMPOSER_2_VERSION 2.2.7

FROM composer:$COMPOSER_1_VERSION AS composer1
COPY --from=composer1 /usr/bin/composer /usr/local/bin/composer1

FROM composer:$COMPOSER_2_VERSION AS composer2
COPY --from=composer2 /usr/bin/composer /usr/local/bin/composer2

RUN ln /usr/local/bin/composer2 /usr/local/bin/composer
