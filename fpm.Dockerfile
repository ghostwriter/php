ARG PHP_VERSION=8.4

FROM --platform=$BUILDPLATFORM php:${PHP_VERSION}-fpm-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN set -euxo pipefail && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    apk add --no-cache ca-certificates curl git github-cli jq make openrc patch && \
    install-php-extensions apcu bcmath bz2 curl dom ftp gd gmp gnupg igbinary imap intl ldap libxml mbstring memcached mongodb msgpack odbc opcache pcntl pdo pdo_mysql pdo_odbc pdo_pgsql pdo_sqlite pdo_sqlsrv readline simplexml soap sockets sqlite3 sqlsrv tidy uuid xml xmlwriter xsl zip && \
    if [ $(php -r "echo version_compare(PHP_VERSION, '8.2.999', '<');") = 1 ]; then \
      install-php-extensions imagick; \
    fi && \
    apk del --no-network --purge --no-cache $PHPIZE_DEPS && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
    rm -vrf /var/lib/apt/lists/* && \
    rm -vrf /var/tmp/* && \
    rm $PHP_INI_DIR/php.ini-development && \
    mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini && \
    sed 's/short_open_tag=On/short_open_tag=Off/' $PHP_INI_DIR/php.ini && { \
    echo 'memory_limit=1024M'; \
    echo 'upload_max_filesize=128M'; \
    echo 'post_max_size=128M'; \
    } > /usr/local/etc/php/conf.d/memory-limit.ini && \
    sed -i 's/www-data/root/g' /usr/local/etc/php-fpm.d/www.conf && \
    gh --version && \
    git --version && \
    php --version;

CMD ["php-fpm", "-R"]
