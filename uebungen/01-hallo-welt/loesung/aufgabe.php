<?php

declare(strict_types=1);

function gruss(string $name = ''): string
{
    $name = trim($name);

    return 'Hallo, ' . ($name === '' ? 'Welt' : $name) . '!';
}
