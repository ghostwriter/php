<?php

declare(strict_types=1);

$dev = '8.6';
$dev = '8.5';

$phpVersions = array_unique(['7.3', '7.4', '8.0', '8.1', '8.2', '8.3', '8.4', '8.5', $dev]);
usort($phpVersions, static fn(string $a, string $b): int => \version_compare($b, $a));

$frankenphpVersions = array_unique(['8.2', '8.3', '8.4', '8.5', $dev]);
usort($frankenphpVersions, static fn(string $a, string $b): int => \version_compare($b, $a));

$variants = ['cli', 'fpm', 'zts', 'frankenphp'];

$include = [];

foreach ($phpVersions as $phpVersion) {
    foreach ($variants as $variant) {
        if ($variant === 'frankenphp' && !\in_array($phpVersion, $frankenphpVersions, true)) {
            continue;
        }

        $with = null;

        if ($variant === 'cli') {
            $include[$phpVersion] = [
                'version' => $phpVersion,
                'variant' => null,
                'with' => 'xdebug',
            ];
        }

        $include[$phpVersion . '-' . $variant] = [
            'version' => $phpVersion,
            'variant' => $variant,
            'with' => $with,
        ];
    }
}

// echo json_encode($include, JSON_PRETTY_PRINT);

// foreach ($include as $key => $value) {
//     echo $key . PHP_EOL;
//     echo 'Version: ' . $value['version'] . PHP_EOL;
//     echo 'Variant: ' . ($value['variant'] ?? 'cli') . PHP_EOL;
//     echo 'With: ' . ($value['with'] ?? 'none') . PHP_EOL;
//     echo PHP_EOL;
// }

function versionTemplate(string $phpVersion, array $variants, array $frankenphpVersions): string
{
    $body = $sh = [];
    $body[] = '';
    $sh[] = '';
    $sh[] = \sprintf('### PHP `%s` CLI with Xdebug', $phpVersion);
    $sh[] = \dockerTemplate($phpVersion);

    foreach ($variants as $variant) {
        if ($variant === 'frankenphp' && !\in_array($phpVersion, $frankenphpVersions, true)) {
            continue;
        }
        $sh[] = '';
        $sapi = \mb_strtolower($phpVersion . '-' . $variant);
        $sh[] = \sprintf('### PHP `%s`', $sapi);
        $sh[] = \dockerTemplate($sapi);
    }

    $body[] = \sprintf('## PHP %s', $phpVersion);
    $body[] = '';
    $body[] = \sprintf('Use `PHP %s` image in Dockerfile or Pull & Run `PHP %s` image from the command line', $phpVersion, $phpVersion);
    $body[] = \implode(\PHP_EOL, $sh);

    return \implode(\PHP_EOL, $body);
}

function dockerTemplate(string $sapi): string
{
    return \implode(PHP_EOL, [
        '',
        '```Dockerfile',
        \sprintf('FROM ghcr.io/ghostwriter/php:%s', $sapi),
        '```',
        '',
        '```bash',
        \sprintf('docker pull ghcr.io/ghostwriter/php:%s', $sapi),
        '```',
        '',
        '```bash',
        \sprintf('docker run -it --rm -v $PWD:/srv/app -w /srv/app ghcr.io/ghostwriter/php:%s php -v', $sapi),
        '```',
    ]);
}

function printREADME(array $phpVersions, array $variants, array $frankenphpVersions): string
{
    $body[] = \implode(\PHP_EOL, [
        '# PHP for Docker [![Docker CI/CD](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml/badge.svg)](https://github.com/ghostwriter/php/actions/workflows/docker-build-push.yml)',
        '',
        'Development and Production-ready PHP Images for Docker',
    ]);

    $supportedVersions = \implode(', ', \array_map(static fn(string $phpVersion): string => \sprintf(
        '[`%s`](#php-%s)',
        $phpVersion,
        \str_replace('.', '', \mb_strtolower($phpVersion)),
    ), $phpVersions));

    $supportedVariants = \implode(', ', \array_map(static fn(string $variant): string => \sprintf(
        '[`%s`](#php-%s-%s)',
        \mb_strtolower($variant),
        \str_replace('.', '', \mb_strtolower($phpVersions[0])),
        \mb_strtolower($variant),
    ), $variants));

    $body[] = \implode(\PHP_EOL, [
        '',
        \sprintf('> **Supported versions: %s**', $supportedVersions),
        '>',
        \sprintf('> **Supported variants: %s**', $supportedVariants),
    ]);

    foreach ($phpVersions as $phpVersion) {
        $body[] = \versionTemplate($phpVersion, $variants, $frankenphpVersions);
    }

    $body[] = '';

    return \implode(\PHP_EOL, $body);
}

$readme = \printREADME($phpVersions, $variants, $frankenphpVersions);

\file_put_contents(\dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'README.md', $readme);

echo 'README.md updated' . \PHP_EOL;
exit(0);
