<?php

declare(strict_types=1);

$dev = '8.4-rc';
$latest = '8.3';
$variants = ['cli', 'fpm', 'zts'];
$versions = ['5.4', '5.5', '5.6', '7.0', '7.1', '7.2', '7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4-rc'];
\arsort($versions);

echo \json_encode([
    'dev' => [$dev],
    'latest' => [$latest],
    'version' => \array_values($versions),
    'variant' => \array_values($variants),
], \JSON_THROW_ON_ERROR);
