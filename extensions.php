<?php

declare(strict_types=1);

$phpVersion = PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION;

$extensions = [
    'apcu', 'bcmath', 'bz2', 'curl', 'dom', 'ftp',
    'gd', 'gmp', 'gnupg', 'igbinary', 'imap', 'intl', 'ldap', 'libxml',
    'mbstring', 'memcached', 'mongodb', 'msgpack', 'odbc', 'opcache', 'pcntl',
    'pdo', 'pdo_mysql', 'pdo_odbc', 'pdo_pgsql', 'pdo_sqlite', 'pdo_sqlsrv',
    'readline', 'simplexml', 'soap', 'sockets', 'sqlite3', 'sqlsrv', 'tidy',
    'uuid', 'xml', 'xmlwriter', 'xsl', 'zip',
];

$excludeExtensions = [
    '8.3' => ['imagick'],
    '8.4' => ['imagick', 'imap', 'pcov'],
];

$requiredExtensions = array_diff($extensions, $excludeExtensions[$phpVersion] ?? []);

$missingExtensions = array_filter(
    $requiredExtensions,
    static function (string $extension): bool {
        return !extension_loaded($extension);
    }
);

echo implode(' ', $missingExtensions);
