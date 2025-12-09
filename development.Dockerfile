ARG PHP_VERSION=8.5
ARG PHP_VARIANT=cli

FROM --platform=$BUILDPLATFORM ghcr.io/ghostwriter/php:${PHP_VERSION}-${PHP_VARIANT}

WORKDIR /srv/workspace

ENV XDEBUG_MODE=coverage

COPY script/extensions.php script/extensions.php
COPY script/tools.php script/tools.php

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN set -euxo pipefail && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    $(php script/extensions.php | sh) && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    apk add --no-cache $(php script/tools.php) && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && \
    rm -vrf script/* && \
    rm $PHP_INI_DIR/php.ini-production && \
    mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini && \
    sed 's/short_open_tag=On/short_open_tag=Off/' $PHP_INI_DIR/php.ini && { \
    echo 'memory_limit=2048M'; \
    echo 'upload_max_filesize=128M'; \
    echo 'post_max_size=128M'; \
    } > /usr/local/etc/php/conf.d/memory-limit.ini && \
    composer --version && \
    gh --version && \
    git --version && \
    php --version && \
    php -m;
