<?php

declare(strict_types=1);

function istPalindrom(string $text): bool
{
    // Alles entfernen, was kein Buchstabe (\p{L}) oder keine Ziffer (\p{N}) ist.
    $bereinigt = mb_strtolower(preg_replace('/[^\p{L}\p{N}]/u', '', $text));
    $zeichen = mb_str_split($bereinigt);

    return $zeichen === array_reverse($zeichen);
}
