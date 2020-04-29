FROM docker.pkg.github.com/nathane/php/php:7.4-base

ENV XDEBUG_VERSION 2.9.5

RUN pecl install xdebug-$XDEBUG_VERSION \
  && docker-php-ext-enable xdebug
