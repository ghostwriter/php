ARG PHP_VERSION=8.5

FROM --platform=$BUILDPLATFORM ghcr.io/ghostwriter/php:${PHP_VERSION}-cli

ENV XDEBUG_ENABLED=true
ENV XDEBUG_MODE=coverage

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/install-php-extensions
COPY script /buildxphp

RUN set -euxo pipefail && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    $(php /buildxphp/extensions.php) && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    $(php /buildxphp/tools.php) && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && \
    rm -vrf /buildxphp/* && \
    composer --version && \
    gh --version && \
    git --version && \
    php --version && \
    php -m;
