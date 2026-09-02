<?php

declare(strict_types=1);

\printf('apk add --no-cache %s', \implode(' ', [
    'bash',
    'ca-certificates',
    'curl',
    'git',
    'github-cli',
    'jq',
    'make',
    'openrc',
    'patch',
    'sudo',
]));
