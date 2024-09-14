<?php

$sapi = \mb_strtolower(\PHP_SAPI);

$phpVariant = 'cli';

if (\strpos($sapi, 'fpm') !== false) {
    $phpVariant = 'fpm';
}

if (\defined('ZEND_THREAD_SAFE') && \ZEND_THREAD_SAFE) {
    $phpVariant = 'zts';
}

$phpVersion = \PHP_MAJOR_VERSION . '.' . \PHP_MINOR_VERSION;

$extensions = [
    'apcu', 'bcmath', 'bz2', 'curl', 'dom', 'ftp',
    'gd', 'gmp', 'gnupg', 'igbinary', 'imap', 'intl', 'ldap', 'libxml',
    'mbstring', 'memcached', 'mongodb', 'msgpack', 'odbc', 'opcache', 'pcntl',
    'pdo', 'pdo_mysql', 'pdo_odbc', 'pdo_pgsql', 'pdo_sqlite', 'pdo_sqlsrv',
    'readline', 'simplexml', 'soap', 'sockets', 'sqlite3', 'sqlsrv', 'tidy',
    'uuid', 'xml', 'xmlwriter', 'xsl', 'zip',
];

$variants = ['cli', 'fpm', 'zts'];
$versions = ['5.4', '5.5', '5.6', '7.0', '7.1', '7.2', '7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4-rc'];

$excludeExtensions =  \array_fill_keys($versions,[]);
$excludeExtensions['8.4-rc'][] = 'imagick';
$excludeExtensions['8.4-rc'][] = 'imap';
$excludeExtensions['8.4-rc'][] = 'pcov';

$requiredExtensions = \array_diff($extensions, array_keys($excludeExtensions[$phpVersion]));

$missingExtensions = \array_filter($requiredExtensions, static function (string $extension): bool {
    return !\extension_loaded($extension);
});

if ($missingExtensions === []) {
    // All required extensions are loaded
    $missingExtensions = ['mbstring'];
}

echo \implode(' ', $missingExtensions);
