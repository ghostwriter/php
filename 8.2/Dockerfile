FROM ghcr.io/ghostwriter/php:8.2-composer

ENV XDEBUG_VERSION master

RUN git clone https://github.com/xdebug/xdebug.git && cd xdebug \
    && git checkout $XDEBUG_VERSION && phpize \
    && ./configure --enable-xdebug && make && make install && cd ../ \
    && rm -rf xdebug && docker-php-ext-enable xdebug
