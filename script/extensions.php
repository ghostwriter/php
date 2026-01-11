<?php

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
        'ffi',
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
        'xdebug',
        'yaml',
        'zip',
        'zlib',
    ],
    static function ($extension) { return !\extension_loaded($extension); }
);

if ([] === $missingExtensions) {
    // All required extensions are loaded
    $missingExtensions = ['mbstring'];
}

//if (array_key_exists('XDEBUG_MODE', $_ENV) && $_ENV['XDEBUG_MODE'] !== 'off') {
//    $missingExtensions[] =  'xdebug/xdebug@3.5.0';
//    $missingExtensions[] =  'xdebug';
//}

echo trim(\implode(\PHP_EOL, array_map(
    static function ( $missingExtension) {return sprintf('install-php-extensions %s;', $missingExtension);},
    $missingExtensions
)));
