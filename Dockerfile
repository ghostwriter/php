ARG PHP_VERSION=8.4
ARG PHP_VARIANT=cli

FROM --platform=$BUILDPLATFORM php:${PHP_VERSION}-${PHP_VARIANT}-alpine

WORKDIR /srv/workspace

COPY script/extensions.php script/extensions.php
COPY script/tools.php script/tools.php

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN set -euxo pipefail && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    install-php-extensions $(php script/extensions.php) && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    apk add --no-cache $(php script/tools.php) && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && \
    rm -vrf script/* && \
    rm $PHP_INI_DIR/php.ini-development && \
    mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini && \
    sed 's/short_open_tag=On/short_open_tag=Off/' $PHP_INI_DIR/php.ini && { \
    echo 'memory_limit=2048M'; \
    echo 'upload_max_filesize=128M'; \
    echo 'post_max_size=128M'; \
    } > /usr/local/etc/php/conf.d/memory-limit.ini && \
    gh --version && \
    git --version && \
    php --version;
