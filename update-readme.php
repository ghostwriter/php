<?php

declare(strict_types=1);

$versions = ['7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4-rc'];

\arsort($versions);

$dev = '8.4-rc';
$latest = '8.3';

$variants = ['cli', 'fpm', 'zts'];

$extensions = [
    //    'database' => ['pgsql'],
    'code-coverage' => ['pcov'],
    'extension' => [
        //    'swoole',
        //    'roadrunner',
        //    'frankenphp'
    ],
];

function terminalTemplate(string $phpVersion): string
{
    return \sprintf(
        '#### ![Terminal](resource/icons/terminal.svg) Pull & Run `PHP %s` image from the command line',
        $phpVersion
    ) . \PHP_EOL;
}

function codeTemplate(string $phpVersion): string
{
    return \sprintf('#### ![Code](resource/icons/code.svg) Use `PHP %s` image in Dockerfile', $phpVersion) . \PHP_EOL;
}

function versionTemplate(string $version, array $variants, array $extensions): string
{
    $body = $code = $sh = [];

    $code[] = \dockerFile($version);
    $sh[] = \dockerPull($version);
    $sh[] = \dockerRun($version);

    foreach ($variants as $variant) {
        $code[] = \dockerFile($version, $variant);
        $sh[] = \dockerPull($version, $variant);
        $sh[] = \dockerRun($version, $variant);
    }

    $body[] = \sprintf('### PHP %s', $version) . \PHP_EOL;

    $body[] = \codeTemplate($version);
    $body[] = \implode(\PHP_EOL, $code) . \PHP_EOL;

    $body[] = \terminalTemplate($version);
    $body[] = \implode(\PHP_EOL, $sh) . \PHP_EOL;

    return \implode(\PHP_EOL, $body);
}
function dockerFile(string $phpVersion, ?string $variant = null): string
{
    if ($variant === null) {
        return \sprintf(
            <<<EOT
                ```Dockerfile
                FROM ghcr.io/ghostwriter/php:%s # %s-cli with additional development tools
                ```
                EOT
            ,
            $phpVersion,
            $phpVersion,
        );
    }

    return \sprintf(
        <<<EOT
            ```Dockerfile
            FROM ghcr.io/ghostwriter/php:%s-%s
            ```
            EOT
        ,
        $phpVersion,
        $variant,
    );
}
function dockerRun(string $phpVersion, ?string $variant = null): string
{
    return \sprintf(
        <<<EOT
            ```sh
            docker run -it --rm -v \$PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:%s%s vendor/bin/phpunit
            ```
            EOT
        ,
        $phpVersion,
        $variant ? '-' . $variant : '',
    );
}
function dockerPull(string $phpVersion, ?string $variant = null): string
{
    return \sprintf(
        <<<EOT
            ```sh
            docker pull ghcr.io/ghostwriter/php:%s%s
            ```
            EOT
        ,
        $phpVersion,
        $variant ? '-' . $variant : '',
    );
}
function printREADME(array $versions, array $variants, array $extensions): string
{
    $body[] = <<<EOT
        # PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

        Development and Production-ready PHP Images for Docker

        **Special thanks to [@mlocati](https://github.com/mlocati) for creating the fantastic [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer) tool, which made all of this possible!**
        EOT;

    $body[] = \sprintf(
        '%s> **Supported versions: %s**%s',
        \PHP_EOL,
        \implode(
            ', ',
            \array_map(
                static fn (string $version): string => \sprintf(
                    '[`%s`](#-use-php-%s-image-in-dockerfile)',
                    $version,
                    \str_replace('.', '', \mb_strtolower($version))
                ),
                $versions
            )
        ),
        \PHP_EOL
    );

    foreach ($versions as $version) {
        $body[] = \versionTemplate($version, $variants, $extensions) . \PHP_EOL;
    }

    return \implode(\PHP_EOL, $body);
}

$readme = \printREADME($versions, $variants, $extensions);

//die($readme);

\file_put_contents('README.md', $readme);

print 'README.md updated' . \PHP_EOL;
exit(0);
