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

$matrix = \sprintf('matrix=%s' . \PHP_EOL, \json_encode(
    \matrix($versions, $variants, $latest, $dev),
    \JSON_THROW_ON_ERROR,
));

$gitHubOutput = \getenv('GITHUB_OUTPUT');

if ($gitHubOutput === false) {
    $gitHubOutput = \tempnam(\sys_get_temp_dir(), 'GITHUB_OUTPUT');

    \file_put_contents($gitHubOutput, \sprintf('matrix=%s' . \PHP_EOL, $matrix), \FILE_APPEND);
}

\fwrite(\STDOUT, $matrix);
