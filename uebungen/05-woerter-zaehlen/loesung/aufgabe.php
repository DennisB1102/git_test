<?php

declare(strict_types=1);

/** @return array<string, int> */
function woerterZaehlen(string $text): array
{
    preg_match_all('/[\p{L}\p{N}]+/u', mb_strtolower($text), $treffer);
    $anzahl = array_count_values($treffer[0]);

    uksort($anzahl, fn (string $a, string $b) => [$anzahl[$b], $a] <=> [$anzahl[$a], $b]);

    return $anzahl;
}
