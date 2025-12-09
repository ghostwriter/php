<?php

defined('JSON_THROW_ON_ERROR') || define('JSON_THROW_ON_ERROR', 4194304);

//$dev = '8.6-dev';
$dev = '8.5';

$versions = array_unique(['5.4', '5.5', '5.6', '7.0', '7.1', '7.2', '7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4', '8.5', $dev]);

usort($versions, function ($left, $right) {
    return version_compare($right, $left);
});

try {
    echo json_encode([
        'dev' => [$dev],
        'latest' => ['8.5'],
        'version' => array_values($versions),
        'variant' => ['cli', 'fpm', 'zts'],
    ], JSON_THROW_ON_ERROR);
    exit(0);
} catch (Exception $e) {
    echo 'Error encoding JSON';
    exit(1);
}
