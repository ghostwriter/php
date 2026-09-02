<?php

declare(strict_types=1);

$missingExtensions = \array_filter([
    'apcu',
    'bcmath',
    'bz2',
    'ctype',
    'curl',
    'date',
    'dom',
    'ds',
    'event',
    'exif',
    // 'ffi',
    'fileinfo',
    'filter',
    'ftp',
    'gd',
    'gettext',
    'gmp',
    'gnupg',
    'hash',
    'iconv',
    'igbinary',
    'imagick',
    'imap',
    'intl',
    'json',
    'ldap',
    'libxml',
    'mbstring',
    'memcached',
    'msgpack',
    'mysqli',
    'mysqlnd',
    'odbc',
    'opcache',
    'openssl',
    'pcntl',
    'pcre',
    'pdo',
    'pdo_mysql',
    'pdo_odbc',
    'pdo_pgsql',
    'pdo_sqlite',
    'pgsql',
    'phar',
    'posix',
    'protobuf',
    'readline',
    'redis',
    'reflection',
    'session',
    'simplexml',
    'soap',
    'sockets',
    'sodium',
    'spl',
    'sqlite3',
    'sqlsrv',
    'ssh2',
    'standard',
    'tidy',
    'tokenizer',
    'xml',
    'xmlreader',
    'xmlwriter',
    'xsl',
    'yaml',
    'zip',
    'zlib',
], static function (string $extension): bool {
    return ! \extension_loaded($extension);
});

if ([] === $missingExtensions) {
    // All required extensions are loaded
    $missingExtensions = ['mbstring'];
}

$xdebug = \getenv('XDEBUG_ENABLED');
if (true === $xdebug || 'true' === $xdebug) {
    $missingExtensions[] = 'xdebug';
}

\printf('install-php-extensions %s', \implode(' ', $missingExtensions));
