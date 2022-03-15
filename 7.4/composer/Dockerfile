FROM ghcr.io/ghostwriter/php:7.4-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_1_VERSION 1.10.24
ENV COMPOSER_2_VERSION 2.2.9

RUN wget https://getcomposer.org/download/$COMPOSER_1_VERSION/composer.phar \
    && mv composer.phar /usr/local/bin/composer1 \
    && chmod +x /usr/local/bin/composer1 \
    && wget https://getcomposer.org/download/$COMPOSER_2_VERSION/composer.phar \
    && mv composer.phar /usr/local/bin/composer2 \
    && chmod +x /usr/local/bin/composer2 \
    && ln /usr/local/bin/composer2 /usr/local/bin/composer
