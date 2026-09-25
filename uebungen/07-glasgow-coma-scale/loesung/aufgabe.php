<?php

declare(strict_types=1);

function gcs(int $augen, int $verbal, int $motorik): int
{
    $bereiche = [
        'Augen' => [$augen, 4],
        'Verbal' => [$verbal, 5],
        'Motorik' => [$motorik, 6],
    ];

    foreach ($bereiche as $name => [$wert, $maximum]) {
        if ($wert < 1 || $wert > $maximum) {
            throw new InvalidArgumentException("{$name} muss zwischen 1 und {$maximum} liegen, erhalten: {$wert}");
        }
    }

    return $augen + $verbal + $motorik;
}

function gcsSchweregrad(int $summe): string
{
    return match (true) {
        $summe >= 13 && $summe <= 15 => 'leicht',
        $summe >= 9 && $summe <= 12 => 'mittelschwer',
        $summe >= 3 && $summe <= 8 => 'schwer',
        default => throw new InvalidArgumentException("Ungültige GCS-Summe: {$summe}"),
    };
}
