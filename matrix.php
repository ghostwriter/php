<?php

declare(strict_types=1);

$versions = ['5.4', '7.0', '7.1', '7.2', '7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4-rc'];

\arsort($versions);

$dev = '8.4-rc';
$latest = '8.3';
$variants = ['cli', 'fpm', 'zts'];

function matrix(array $versions, array $variants, string $latest, string $dev): array
{
    return [
        'dev' => $dev,
        'latest' => $latest,
        'variant' => \array_values($variants),
        'version' => \array_values($versions),
    ];
}

echo \json_encode(\matrix($versions, $variants, $latest, $dev), \JSON_THROW_ON_ERROR);
