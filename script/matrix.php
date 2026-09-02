<?php

declare(strict_types=1);

\defined('JSON_THROW_ON_ERROR') || \define('JSON_THROW_ON_ERROR', 4194304);

$dev = '8.6';

$frankenphpVersions = ['8.2', '8.3', '8.4', '8.5', '8.6'];

$phpVersions = ['7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4', '8.5', '8.6'];

$variants = ['cli', 'fpm', 'zts'];

$include = [];

foreach ($variants as $variant) {
    foreach ($phpVersions as $phpVersion) {
        $include[] = [
            'variant' => $variant,
            'version' => $phpVersion,
            'continueOnError' => $phpVersion === $dev,
        ];
    }
}

foreach ($frankenphpVersions as $frankenphpVersion) {
    $include[] = [
        'variant' => 'frankenphp',
        'version' => $frankenphpVersion,
        'continueOnError' => $frankenphpVersion === $dev,
    ];
}

try {
    echo \json_encode(['include' => $include], \JSON_THROW_ON_ERROR);
    exit(0);
} catch (\Exception $e) {
    echo 'Error encoding JSON';
    exit(1);
}
