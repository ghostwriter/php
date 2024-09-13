<?php

declare(strict_types=1);

$sapi = \mb_strtolower(\PHP_SAPI);

$phpVariant = match (true) {
    \defined('ZEND_THREAD_SAFE') && \ZEND_THREAD_SAFE => 'zts',
    \str_contains($sapi, 'fpm') => 'fpm',
    \str_contains($sapi, 'cli') => 'cli',
    default => throw new \RuntimeException('Unknown PHP SAPI: ' . $sapi),
};

$phpVersion = \PHP_MAJOR_VERSION . '.' . \PHP_MINOR_VERSION;

$extensions = [
    'apcu', 'bcmath', 'bz2', 'curl', 'dom', 'ftp',
    'gd', 'gmp', 'gnupg', 'igbinary', 'imap', 'intl', 'ldap', 'libxml',
    'mbstring', 'memcached', 'mongodb', 'msgpack', 'odbc', 'opcache', 'pcntl',
    'pdo', 'pdo_mysql', 'pdo_odbc', 'pdo_pgsql', 'pdo_sqlite', 'pdo_sqlsrv',
    'readline', 'simplexml', 'soap', 'sockets', 'sqlite3', 'sqlsrv', 'tidy',
    'uuid', 'xml', 'xmlwriter', 'xsl', 'zip',
];

$excludeExtensions = [
    '7.3' => [
        '*' => [],
        'cli' => [],
        'fpm' => [],
        'zst' => [],
    ],
    '8.3' => [
        '*' => ['imagick'],
    ],
    '8.4' => [
        '*' => ['imagick', 'imap', 'pcov'],
    ],
];

$requiredExtensions = \array_diff(
    $extensions,
    $excludeExtensions[$phpVersion]['*'] ?? [],
    $excludeExtensions[$phpVersion][$phpVariant] ?? []
);

$missingExtensions = \array_filter(
    $requiredExtensions,
    static fn (string $extension): bool => ! \extension_loaded($extension)
);

if ($missingExtensions === []) {
    // All required extensions are loaded
    $missingExtensions = ['mbstring'];
}

echo \implode(' ', $missingExtensions);
