FROM ghcr.io/ghostwriter/php:5.6-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_1_VERSION 1.10.24
ENV COMPOSER_2_VERSION 2.2.8

COPY --from=composer:$COMPOSER_1_VERSION /usr/bin/composer /usr/local/bin/composer1
COPY --from=composer:$COMPOSER_2_VERSION /usr/bin/composer /usr/local/bin/composer2

RUN ln /usr/local/bin/composer2 /usr/local/bin/composer