ARG PHP_VERSION=8.3-rc

FROM php:${PHP_VERSION}-cli-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN ln -snf /usr/share/zoneinfo/UTC /etc/localtime && echo UTC > /etc/timezone \
    && install-php-extensions apcu bcmath bz2 curl dom gd gmp igbinary imap intl ldap mbstring memcached mongodb msgpack opcache pcntl pdo_mysql pdo_pgsql pdo_sqlite pdo readline redis simplexml soap sockets sqlite3 tidy uuid xml xmlwriter xsl zip;

# PHP 8.3 not supported yet
RUN if [ $(php -r "echo version_compare(PHP_VERSION, '8.2.999', '<');") = 1 ]; then \
    install-php-extensions imagick; \
    fi;

RUN apk add --no-cache --virtual curl git github-cli openrc \
    && rm -rf /var/cache/apk/* \
    && rm -rf /var/tmp/* \
    && rm -rf /tmp/*;

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini && \
    rm $PHP_INI_DIR/php.ini-development && \
    sed 's/short_open_tag=On/short_open_tag=Off/' $PHP_INI_DIR/php.ini && { \
    echo 'memory_limit=2048M'; \
    echo 'upload_max_filesize=128M'; \
    echo 'post_max_size=128M'; \
    } > /usr/local/etc/php/conf.d/memory-limit.ini
