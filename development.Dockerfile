ARG PHP_VERSION=8.4

FROM --platform=$BUILDPLATFORM ghcr.io/ghostwriter/php:${PHP_VERSION}-cli

WORKDIR /srv/workspace

COPY coverage.php coverage.php

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN set -euxo pipefail && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    apk add --no-cache bash ca-certificate curl git github-cli jq make openrc patch sudo && \
    install-php-extensions $(php coverage.php) && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && { \
    echo 'xdebug.mode=develop,trace'; \
    } > /usr/local/etc/php/conf.d/xdebug.ini && \
    rm -vrf coverage.php && \
    gh --version && \
    git --version && \
    php --version && \
    composer --version;
