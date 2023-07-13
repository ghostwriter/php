#! bin/sh -e

install-php-extensions apcu;
install-php-extensions bcmath;
install-php-extensions bz2;
install-php-extensions curl;
install-php-extensions dom;
install-php-extensions gd;
install-php-extensions gmp;
# PHP 8.3 not supported yet
if [ $(php -r "echo version_compare(PHP_VERSION, '8.2.999', '<');") = 1 ]; then
    install-php-extensions imagick;
fi
install-php-extensions intl;
install-php-extensions mbstring;
install-php-extensions memcached;
install-php-extensions mongodb;
install-php-extensions opcache;
install-php-extensions pcntl;
install-php-extensions pdo_mysql;
install-php-extensions pdo_pgsql;
install-php-extensions pdo_sqlite;
install-php-extensions pdo;
install-php-extensions redis;
install-php-extensions simplexml;
install-php-extensions soap;
install-php-extensions sockets;
install-php-extensions sqlite3;
install-php-extensions tidy;
install-php-extensions uuid;
install-php-extensions xml;
install-php-extensions xmlwriter;
install-php-extensions xsl;
install-php-extensions zip;
