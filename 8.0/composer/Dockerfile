FROM ghcr.io/ghostwriter/php:8.0-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_2_VERSION 2.3.4

RUN wget https://getcomposer.org/download/$COMPOSER_2_VERSION/composer.phar \
    && mv composer.phar /usr/local/bin/composer2 \
    && chmod +x /usr/local/bin/composer2 \
    && ln /usr/local/bin/composer2 /usr/local/bin/composer
