ARG PHP_VERSION=8.4
ARG PHP_VARIANT=cli

FROM --platform=$BUILDPLATFORM ghcr.io/ghostwriter/php:${PHP_VERSION}-${PHP_VARIANT}

WORKDIR /srv/workspace

ENV XDEBUG_MODE=coverage

COPY script/tools.php script/tools.php
COPY script/coverage.php coverage.php

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN set -euxo pipefail && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    install-php-extensions $(php script/coverage.php) && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    apk add --no-cache $(php script/tools.php) && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && \
    rm -vrf script/* && \
    gh --version && \
    git --version && \
    php --version && \
    composer --version;
