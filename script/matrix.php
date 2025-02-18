<?php

declare(strict_types=1);

$versions = ['7.4', '8.0', '8.1', '8.2', '8.3', '8.4'];

\arsort($versions);

try {
    $result = \json_encode([
        'dev' => ['master'],
        'latest' => ['8.4'],
        'version' => \array_values($versions),
        'variant' => ['cli', 'fpm', 'zts'],
    ], \JSON_THROW_ON_ERROR);
} catch (\Throwable $e) {
    echo 'Error encoding JSON';
    exit(1);
}

echo $result;
