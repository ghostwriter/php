#!/bin/sh
set -o errexit
set -o nounset

# PHP 8.3 not supported yet
if [ $(php -r "echo version_compare(PHP_VERSION, '8.2.999', '<');") = 1 ]; then
    install-php-extensions imagick;
fi
