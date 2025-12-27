ARG PHP_VERSION=8.5

FROM --platform=$BUILDPLATFORM dunglas/frankenphp:php${PHP_VERSION}-alpine
WORKDIR /srv/workspace

ENV XDEBUG_MODE=coverage

COPY script/extensions.php script/extensions.php
COPY script/tools.php script/tools.php

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/install-php-extensions
COPY --from=oven/bun:alpine /usr/local/bin/bun /usr/local/bin/bun
COPY --from=oven/bun:alpine /usr/local/bin/bunx /usr/local/bin/bunx

RUN set -euxo pipefail && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    php script/extensions.php | sh;

RUN set -euxo pipefail && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    apk add --no-cache $(php script/tools.php) && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && \
    rm -vrf script/* && \
    bun --version && \
    composer --version && \
    gh --version && \
    git --version && \
    php --version && \
    php -m;
