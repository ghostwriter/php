ARG PHP_VERSION=8.3-rc

FROM ghcr.io/ghostwriter/php:${PHP_VERSION}

ENV COMPOSER_ALLOW_SUPERUSER 1

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

ENV PATH="$(composer config --global home)/vendor/bin:$PATH"
