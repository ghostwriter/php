<?php

$versions = [
    '7.4',
    '8.0',
    '8.1',
    '8.2',
    '8.3-rc',
];

arsort($versions);

$dev = '8.3-rc';
$latest = '8.2';

$types = [
    'cli',
    'fpm',
    'composer',
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

function teminalTemplate(string $phpVersion): string
{
    return sprintf(
        '#### ![Terminal](icons/terminal.svg) Pull PHP %s image from the command line',
        $phpVersion
    ) . PHP_EOL;
}

function codeTemplate(string $phpVersion): string
{
    return sprintf(
        '#### ![Code](icons/code.svg) Use PHP %s image in Dockerfile',
        $phpVersion
    ) . PHP_EOL;
}

function versionTemplate(string $version, array $versions, array $types, array $extentions): string
{
    $body = sprintf(
        '## PHP %s',
        $version
    ) . PHP_EOL;


    $body .= PHP_EOL . teminalTemplate($version);
    $body .= PHP_EOL . versionTemplateTerminal($version);
    $body .= PHP_EOL . codeTemplate($version);
    $body .= PHP_EOL . versionTemplateCode($version);

    foreach ($types as $type) {
        $body .= PHP_EOL . versionWithTemplate($version, $type);

        $body .= PHP_EOL . teminalTemplate($version);
        $body .= PHP_EOL . versionWithTemplateTerminal($version, $type);

        if ($type === 'composer') {
            foreach ($extentions as $kind => $types) {
                foreach ($types as $type) {
                    $body .= PHP_EOL . versionWithTemplateTerminal($version, $type);
                }
            }

            $body .= PHP_EOL . codeTemplate($version);

            foreach ($extentions as $kind => $types) {
                foreach ($types as $type) {
                    $body .= PHP_EOL . versionWithTemplateCode($version, $type);
                }
            }
        } else {
            $body .= PHP_EOL . codeTemplate($version);
        }


        $body .= PHP_EOL . versionWithTemplateCode($version, $type);
    }

    return $body;
}


function versionWithTemplate(string $phpVersion, string $type): string
{
    return sprintf(
        '## PHP %s : %s',
        $phpVersion,
        strtoupper($type)
    ) . PHP_EOL;
}


function versionWithTemplateTerminal(string $phpVersion, string $type): string
{
    return sprintf(
        <<<EOT
``` sh
docker pull ghcr.io/ghostwriter/php:%s-%s
```
EOT,
        $phpVersion,
        $type,
        $phpVersion,
        $type
    ) . PHP_EOL;
}

function versionWithTemplateCode(string $phpVersion, string $type): string
{
    return sprintf(
        <<<EOT
``` Dockerfile
FROM ghcr.io/ghostwriter/php:%s-%s
```
EOT,
        $phpVersion,
        $type,
        $phpVersion,
        $type
    ) . PHP_EOL;
}


function versionTemplateTerminal(string $phpVersion): string
{
    return sprintf(
        <<<EOT
``` sh
docker pull ghcr.io/ghostwriter/php:%s
```
EOT,
        $phpVersion,
        $phpVersion,
    ) . PHP_EOL;
}

function versionTemplateCode(string $phpVersion): string
{
    return sprintf(
        <<<EOT
``` Dockerfile
FROM ghcr.io/ghostwriter/php:%s
```
EOT,
        $phpVersion,
        $phpVersion,
    ) . PHP_EOL;
}

function printREADME(array $versions, array $types, array $extentions): string
{
    $header = <<<EOT
# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

> **Supported versions: 7.4 - 8.3-rc**
EOT;

    $body = PHP_EOL;

    foreach ($versions as $version) {
        $body .= PHP_EOL . versionTemplate($version, $versions, $types, $extentions);
    }

    return sprintf('%s%s' . PHP_EOL, $header, $body);
}


$template = printREADME($versions, $types, $extentions);

file_put_contents('README.md', $template);

die($template);
