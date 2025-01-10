<?php

declare(strict_types=1);

$versions = ['8.1', '8.2', '8.3', '8.4'];

\arsort($versions);

$dev = '8.5';
$latest = '8.4';
$variants = ['cli', 'fpm', 'zts'];
$extensions = [
    //    'database' => ['mysql','pgsql'],
    'code-coverage' => ['pcov'],
    'extension' => [
        //    'openswoole',
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

    $code[] = '**CLI with code coverage**';
    $code[] = \dockerFile($version);

    $sh[] = '**CLI with code coverage**';
    $sh[] = \dockerPullAndRun($version);

    foreach ($variants as $variant) {
        $code[] = \sprintf('**%s**', \strtoupper($variant));
        $code[] = \dockerFile($version, $variant);
        $sh[] = \sprintf('**%s**', \strtoupper($variant));
        $sh[] = \dockerPullAndRun($version, $variant);
    }

    $body[] = \sprintf('## PHP %s', $version) . \PHP_EOL;

    $body[] = \codeTemplate($version);
    $body[] = \implode(\PHP_EOL, $code) . \PHP_EOL;

    $body[] = \terminalTemplate($version);
    $body[] = \implode(\PHP_EOL, $sh) . \PHP_EOL;

    return \implode(\PHP_EOL, $body);
}
function dockerFile(string $phpVersion, ?string $variant = null): string
{
    if (null === $variant) {
        return \sprintf(
            <<<'EOD'
                ```Dockerfile
                FROM ghcr.io/ghostwriter/php:%s # %s-cli with code coverage
                ```
                EOD
            ,
            $phpVersion,
            $phpVersion,
        );
    }

    return \sprintf(
        <<<'EOD'
            ```Dockerfile
            FROM ghcr.io/ghostwriter/php:%s-%s
            ```
            EOD
        ,
        $phpVersion,
        $variant,
    );
}
function dockerPullAndRun(string $phpVersion, ?string $variant = null): string
{
    $variant = $variant ? '-' . $variant : '';
    return \sprintf(
        <<<'EOD'
            ```sh
            docker pull ghcr.io/ghostwriter/php:%s%s
            docker run -it --rm -v $PWD:/opt/app -w /opt/app ghcr.io/ghostwriter/php:%s%s php -v
            ```
            EOD,
        $phpVersion,
        $variant,
        $phpVersion,
        $variant,
    );
}
function printREADME(array $versions, array $variants, array $extensions): string
{
    $body[] = <<<'EOD'
        # PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)

        Development and Production-ready PHP Images for Docker

        **Special thanks to [@mlocati](https://github.com/mlocati) for creating the fantastic [`mlocati/docker-php-extension-installer`](https://github.com/mlocati/docker-php-extension-installer) tool, which made all of this possible!**
        EOD;

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

// die($readme);

\file_put_contents('README.md', $readme);

echo 'README.md updated' . \PHP_EOL;
exit(0);
