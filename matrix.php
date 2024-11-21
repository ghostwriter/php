<?php

$versions = ['7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4', 'master'];

\arsort($versions);

$result = \json_encode([
    'dev' => ['master'],
    'latest' => ['8.4'],
    'version' => \array_values($versions),
    'variant' => ['cli', 'fpm', 'zts'],
]);

if ($result === false) {
    echo 'Error encoding JSON';
    exit(1);
}

echo $result;
