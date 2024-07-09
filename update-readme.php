<?php

$versions = [
    '7.3',
    '7.4',
    '8.0',
    '8.1',
    '8.2',
    '8.3',
    '8.4-rc',
];

arsort($versions);

$dev = '8.4-rc';
$latest = '8.3';

$types = [
    'cli',
    'fpm',
    'composer',
];

$extensions = [
    'database' => [
        'pgsql',
    ],
    'code-coverage' => [
        'pcov',
    ],
    'extension' => [
        // 'swoole',
    ],
];

function terminalTemplate(string $phpVersion): string
{
    return sprintf(
        '### ![Terminal](icons/terminal.svg) Pull & Run `PHP %s` image from the command line',
        $phpVersion
    ) . PHP_EOL;
}
function terminalTemplateWithType(string $phpVersion, string $type): string
{
    return sprintf(
        '### ![Terminal](icons/terminal.svg) Pull & Run `PHP %s` %s image from the command line',
        $phpVersion,
        $type
    ) . PHP_EOL;
}

function codeTemplate(string $phpVersion): string
{
    return sprintf(
        '### ![Code](icons/code.svg) Use `PHP %s` image in Dockerfile',
        $phpVersion
    ) . PHP_EOL;
}
function codeTemplateWithType(string $phpVersion, string $type): string
{
    return sprintf(
        '### ![Code](icons/code.svg) Use `PHP %s` %s image in Dockerfile',
        $phpVersion,
        $type
    ) . PHP_EOL;
}

function versionTemplate(string $version, array $versions, array $types, array $extensions): string
{
    $body = sprintf(
        '## PHP %s',
        $version
    ) . PHP_EOL;


    $body .= PHP_EOL . terminalTemplate($version);
    $body .= PHP_EOL . versionTemplateTerminal($version);
    $body .= PHP_EOL . codeTemplate($version);
    $body .= PHP_EOL . versionTemplateCode($version);

    foreach ($types as $type) {
        $body .= PHP_EOL . versionWithTemplate($version, $type);

        $body .= PHP_EOL . terminalTemplateWithType($version, $type);
        $body .= PHP_EOL . versionWithTemplateTerminal($version, $type);

        if ($type === 'composer') {
            foreach ($extensions as $types) {
                foreach ($types as $type) {
                    $body .= PHP_EOL . versionWithTemplate($version, $type);
                    $body .= PHP_EOL . terminalTemplateWithType($version, $type);
                    $body .= PHP_EOL . versionWithTemplateTerminal($version, $type);
                    $body .= PHP_EOL . codeTemplateWithType($version, $type);
                    $body .= PHP_EOL . versionWithTemplateCode($version, $type);
                }
            }

            continue;
        }

        $body .= PHP_EOL . codeTemplateWithType($version, $type);
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
    return match ($type) {
        default =>  sprintf(<<<EOT
            ``` sh
            docker pull ghcr.io/ghostwriter/php:%s-%s
            ```

            ``` sh
            docker run -it --rm -v \$PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:%s-%s vendor/bin/phpunit
            ```
            EOT,
            $phpVersion,
            $type,
            $phpVersion,
            $type,
        ) . PHP_EOL,
        'fpm' => sprintf(<<<EOT
            ``` sh
            docker pull ghcr.io/ghostwriter/php:%s-%s
            ```
            EOT,
            $phpVersion,
            $type,
        ) . PHP_EOL
    };
}

function versionWithTemplateCode(string $phpVersion, string $type): string
{
    return sprintf(<<<EOT
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
    return sprintf(<<<EOT
        ``` sh
        docker pull ghcr.io/ghostwriter/php:%s
        ```

        ``` sh
        docker run -it --rm -v \$PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:%s vendor/bin/phpunit
        ```
        EOT,
        $phpVersion,
        $phpVersion,
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

function printREADME(array $versions, array $types, array $extensions): string
{
    $body = <<<EOT
# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

Development and Production-ready PHP Images for Docker

**Special thanks to [@mlocati](https://github.com/mlocati) for creating the fantastic [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer) tool, which made all of this possible!**

> **Supported versions:
EOT;

    $body .= ' ' . implode(', ', $versions) . '**' . PHP_EOL;

    foreach ($versions as $version) {
        $body .= PHP_EOL . versionTemplate($version, $versions, $types, $extensions);
    }

    return sprintf('%s', $body);
}

file_put_contents('README.md', printREADME($versions, $types, $extensions));

print 'README.md updated' . PHP_EOL;
exit(0);
