<?php

$pcov = \PHP_VERSION_ID >= 80400
        ? 'krakjoe/pcov@7d764c7c2555e8287351961d72be3ebec4d8743f'
        : 'pcov';

echo $pcov;
