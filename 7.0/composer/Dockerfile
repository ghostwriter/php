FROM ghcr.io/ghostwriter/php:7.0-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_1_VERSION 1.10.26 
ENV COMPOSER_2_VERSION 2.2.18

RUN wget https://getcomposer.org/download/$COMPOSER_1_VERSION/composer.phar \
    && mv composer.phar /usr/local/bin/composer1 \
    && chmod +x /usr/local/bin/composer1 \
    && wget https://getcomposer.org/download/$COMPOSER_2_VERSION/composer.phar \
    && mv composer.phar /usr/local/bin/composer2 \
    && chmod +x /usr/local/bin/composer2 \
    && ln /usr/local/bin/composer2 /usr/local/bin/composer

ENV PATH="$(composer config --global home)/vendor/bin:$PATH"
