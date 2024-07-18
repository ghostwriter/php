ARG PHP_VERSION=8.4

FROM php:${PHP_VERSION}-fpm-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN set -ex && \
    ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone && \
    apk update && \
    apk upgrade && \
    apk add --update --no-cache ca-certificates curl git github-cli make openrc patch; \
    if [ $(php -r "echo version_compare(PHP_VERSION, '8.3.999', '>');") = 1 ]; then \
    sed -i 's/--with-openssl-dir=\/usr/--with-ftp-ssl/' /usr/local/bin/install-php-extensions; \
    fi; \
    install-php-extensions apcu bcmath bz2 curl dom ftp gd gmp gnupg igbinary imap intl ldap libxml mbstring memcached mongodb msgpack odbc opcache pcntl pdo pdo_mysql pdo_odbc pdo_pgsql pdo_sqlite pdo_sqlsrv readline simplexml soap sockets sqlite3 sqlsrv tidy uuid valkey xml xmlwriter xsl zip && \
    if [ $(php -r "echo version_compare(PHP_VERSION, '8.2.999', '<');") = 1 ]; then \
        install-php-extensions imagick; \
    fi; \
    apk del --purge --no-cache ${PHPIZE_DEPS} && \
    rm -vrf /tmp/* && \
    rm -vrf /var/cache/apk/* && \
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
