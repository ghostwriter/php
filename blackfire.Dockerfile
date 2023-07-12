ARG PHP_VERSION=8.3-rc

FROM ghcr.io/ghostwriter/php:${PHP_VERSION}-composer

RUN install-php-extensions blackfire
