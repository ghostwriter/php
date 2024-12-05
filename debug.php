<?php

if (\getenv('RUNNER_DEBUG') !== false) {
    $eventPath = \getenv('GITHUB_EVENT_PATH');

    if ($eventPath === false) {
        echo 'GITHUB_EVENT_PATH not found';
        exit(1);
    }

    $event = \json_decode(\file_get_contents($eventPath), true);

    if ($event === null) {
        echo 'Failed to parse GITHUB_EVENT_PATH';
        exit(1);
    }

    $environment = \json_decode(\getenv(), true);

    if ($environment === null) {
        echo 'Failed to parse environment';
        exit(1);
    }

    var_dump([
        'event' => $event,
        'environment' => $environment,
    ]);

    exit(1);
}