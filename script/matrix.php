<?php

defined('JSON_THROW_ON_ERROR') || define('JSON_THROW_ON_ERROR', 4194304);

$dev = '8.6';

$include = [];

$versions = array_unique(['7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4', '8.5', $dev]);

$variants = ['cli', 'fpm', 'zts'];

foreach($variants as $variant) {
    foreach($versions as $version) {
        $include[] = ['variant' => $variant, 'version'=> $version, 'continue-on-error' => $version === $dev];
    }
}

$frankenphpVersions = ['8.2', '8.3', '8.4', '8.5'];

foreach($frankenphpVersions as $frankenphpVersion) {
    $include[] = ['variant' => 'frankenphp', 'version'=> $frankenphpVersion, 'continue-on-error' => $frankenphpVersion === $dev];
}

usort($versions, function ($left, $right) {
    return version_compare($right, $left);
});

try {
    echo json_encode([
        'include' => $include,
        'exclude' => [],
    ], JSON_THROW_ON_ERROR);
    exit(0);
} catch (Exception $e) {
    echo 'Error encoding JSON';
    exit(1);
}
