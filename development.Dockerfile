ARG PHP_VERSION=8.4

FROM ghcr.io/ghostwriter/php:${PHP_VERSION}-cli

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY coverage.php coverage.php

ENV PATH="$(composer config --global home)/vendor/bin:$PATH"

RUN set -euxo pipefail && \
    apk update && \
    apk upgrade && \
    install-php-extensions $(php coverage.php) && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && \
    rm -vrf coverage.php && \
    php --version && \
    composer --version;
