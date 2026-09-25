<?php

declare(strict_types=1);

/**
 * @param list<int|float> $zahlen
 * @return array{min: int|float, max: int|float, durchschnitt: float, median: float}
 */
function statistik(array $zahlen): array
{
    if ($zahlen === []) {
        throw new InvalidArgumentException('Die Liste darf nicht leer sein.');
    }

    sort($zahlen);
    $anzahl = count($zahlen);
    $mitte = intdiv($anzahl, 2);
    $median = $anzahl % 2 === 1
        ? $zahlen[$mitte]
        : ($zahlen[$mitte - 1] + $zahlen[$mitte]) / 2;

    return [
        'min' => $zahlen[0],
        'max' => $zahlen[$anzahl - 1],
        'durchschnitt' => round(array_sum($zahlen) / $anzahl, 2),
        'median' => round((float) $median, 2),
    ];
}
