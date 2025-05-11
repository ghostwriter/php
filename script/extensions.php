<?php

declare(strict_types=1);

$missingExtensions = \array_filter(
    [
        'apcu', 'bcmath', 'bz2', 'curl', 'dom', 'ftp',
        'gd', 'gmp', 'gnupg', 'igbinary', 'imagick', 'imap', 'intl', 'ldap', 'libxml',
        'mbstring', 'memcached', 'mongodb', 'msgpack', 'odbc', 'opcache', 'pcntl',
        'pdo', 'pdo_mysql', 'pdo_odbc', 'pdo_pgsql', 'pdo_sqlite',
        'readline', 'simplexml', 'soap', 'sockets', 'sqlite3', 'sqlsrv', 'tidy',
        'xml', 'xmlwriter', 'xsl', 'zip',
    ],
    static fn ($extension) => ! \extension_loaded($extension)
);

if ([] === $missingExtensions) {
    // All required extensions are loaded
    $missingExtensions = ['mbstring'];
}

echo \implode(' ', $missingExtensions);
