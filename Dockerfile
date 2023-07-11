ARG PHP_VERSION=8.3-rc

FROM php:${PHP_VERSION}-cli-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/


COPY install.sh ./

RUN ./install.sh

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini && \
    rm $PHP_INI_DIR/php.ini-development && \
    sed 's/short_open_tag=On/short_open_tag=Off/' $PHP_INI_DIR/php.ini && { \
    echo 'memory_limit=2048M'; \
    echo 'upload_max_filesize=128M'; \
    echo 'post_max_size=128M'; \
    } > /usr/local/etc/php/conf.d/memory-limit.ini
