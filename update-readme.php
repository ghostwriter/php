<?php

$versions = [
    '8.0',
    '8.1',
    '8.2',
    '8.3-rc',
];
arsort($versions);

$dev = '8.3-rc';
$latest = '8.2';

$types = [
    '',
    'cli',
    'composer',
    'fpm',
];

$extentions = [
    'database' => [
        'mysql',
        'pgsql',
    ],
    'code-coverage' => [
        'blackfire',
        'pcov',
        'xdebug',
    ],
    'extention' => [
        'swoole',
    ],
];

$header = <<<EOT
# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker
EOT;

$templateBody = <<<EOT
## PHP {PHP_VERSION}

### ![Terminal](icons/terminal.svg) Pull PHP {PHP_VERSION} image from the command line

``` sh
# PHP CLI
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-cli

# PHP FPM
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-fpm

# PHP CLI with composer
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-composer

# PHP CLI with composer & mysql
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-mysql

# PHP CLI with composer & pgsql
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-pgsql

# PHP CLI with composer & swoole
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-swoole

# PHP CLI with composer & blackfire
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-blackfire

# PHP CLI with composer & pcov
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-pcov

# PHP CLI with composer & xdebug
docker pull ghcr.io/ghostwriter/php:{PHP_VERSION}-xdebug
```

### ![Code](icons/code.svg) Use as base PHP {PHP_VERSION} image in DockerFile

``` Dockerfile
# PHP CLI
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-cli

# PHP FPM
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-fpm

# PHP CLI with composer
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-composer

# PHP CLI with composer & mysql
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-mysql

# PHP CLI with composer & pgsql
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-pgsql

# PHP CLI with composer & swoole
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-swoole

# PHP CLI with composer & blackfire
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-blackfire

# PHP CLI with composer & pcov
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-pcov

# PHP CLI with composer & xdebug
FROM ghcr.io/ghostwriter/php:{PHP_VERSION}-xdebug
```
EOT;

$body = PHP_EOL;

foreach ($versions as $version) {
    $body .= PHP_EOL.str_replace('{PHP_VERSION}', $version, $templateBody);
}

$template = sprintf('%s%s'.PHP_EOL, $header, $body);

file_put_contents('README.md', $template);

die($template);

