ARG PHP_VERSION=8.3-rc

FROM php:{$PHP_VERSION}-fpm-alpine

COPY . /tmp/

RUN chmod +x /tmp/install.sh && /tmp/install.sh && rm -fr /tmp/*

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini && \
    rm $PHP_INI_DIR/php.ini-development && \
    sed 's/short_open_tag=On/short_open_tag=Off/' $PHP_INI_DIR/php.ini && { \
    echo 'memory_limit=1024M'; \
    echo 'upload_max_filesize=128M'; \
    echo 'post_max_size=128M'; \
    } > /usr/local/etc/php/conf.d/memory-limit.ini && \
    sed -i 's/www-data/root/g' /usr/local/etc/php-fpm.d/www.conf

CMD ["php-fpm", "-R"]
