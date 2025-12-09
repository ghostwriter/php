<?php

declare(strict_types=1);

//$dev = '8.6-dev';
$dev = '8.5';

$versions = \array_unique(['7.4', '8.0', '8.1', '8.2', '8.3', '8.4', '8.5', $dev]);

\usort($versions, function (string $left,string $right): int {
    return \version_compare($right, $left);
});

try {
    echo \json_encode([
        'dev' => [$dev],
        'latest' => ['8.5'],
        'version' => \array_values($versions),
        'variant' => ['cli', 'fpm', 'zts'],
    ], \JSON_THROW_ON_ERROR);
    exit(0);
} catch (\Throwable $e) {
    echo 'Error encoding JSON';
    exit(1);
}
