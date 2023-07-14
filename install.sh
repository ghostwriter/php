#!/bin/sh
set -o errexit
set -o nounset

install-php-extensions apcu bcmath bz2 curl dom gd gmp igbinary imap intl ldap mbstring memcached mongodb msgpack opcache pcntl pdo_mysql pdo_pgsql pdo_sqlite pdo readline redis simplexml soap sockets sqlite3 tidy uuid xml xmlwriter xsl zip;

# PHP 8.3 not supported yet
if [ $(php -r "echo version_compare(PHP_VERSION, '8.2.999', '<');") = 1 ]; then
    install-php-extensions imagick;
fi
