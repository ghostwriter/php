<?php

$sapi = \mb_strtolower(\PHP_SAPI);

$debug = \getenv('RUNNER_DEBUG') !== false;
if ($debug) {
    $eventPath = \getenv('GITHUB_EVENT_PATH');

    if ($eventPath === false) {
        echo 'GITHUB_EVENT_PATH not found';
        exit(1);
    }

    $event = \json_decode(\file_get_contents($eventPath), true);

    if ($event === null) {
        echo 'Failed to parse GITHUB_EVENT_PATH';
        exit(1);
    }

    $environment = \json_decode(\getenv(), true);

    if ($environment === null) {
        echo 'Failed to parse environment';
        exit(1);
    }

    var_dump([
        'environment' => $environment,
        'event' => $event,
        'workspace' => \getenv('GITHUB_WORKSPACE'),
    ]);

    exit(1);
}

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
$versions = ['5.4', '5.5', '5.6', '7.0', '7.1', '7.2', '7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4'];

$excludeExtensions =  \array_fill_keys($versions,[]);
$excludeExtensions['8.4'][] = 'apcu';
$excludeExtensions['8.4'][] = 'imagick';
$excludeExtensions['8.4'][] = 'imap';
$excludeExtensions['8.4'][] = 'pcov';

$requiredExtensions = \array_diff($extensions, array_values($excludeExtensions[$phpVersion]));

$missingExtensions = \array_filter($requiredExtensions, static function ($extension) {
    return !\extension_loaded($extension);
});

if ($missingExtensions === []) {
    // All required extensions are loaded
    $missingExtensions = ['mbstring'];
}

echo \implode(' ', $missingExtensions);
