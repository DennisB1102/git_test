<?php

return [
    'wach und orientiert = 15' => fn () => gleich(15, gcs(4, 5, 6)),
    'Minimum = 3' => fn () => gleich(3, gcs(1, 1, 1)),
    'gemischte Werte' => fn () => gleich(9, gcs(2, 3, 4)),
    'Augen 5 ist ungültig' => fn () => wirft(InvalidArgumentException::class, fn () => gcs(5, 5, 6)),
    'Verbal 0 ist ungültig' => fn () => wirft(InvalidArgumentException::class, fn () => gcs(4, 0, 6)),
    'Motorik 7 ist ungültig' => fn () => wirft(InvalidArgumentException::class, fn () => gcs(4, 5, 7)),
    'Fehlermeldung nennt den Bereich' => function () {
        try {
            gcs(4, 9, 6);
        } catch (InvalidArgumentException $e) {
            wahr(str_contains($e->getMessage(), 'Verbal'), 'Die Meldung sollte "Verbal" enthalten.');
            return;
        }
        wahr(false, 'Es wurde keine Exception geworfen.');
    },
    'Schweregrad leicht' => fn () => gleich('leicht', gcsSchweregrad(14)),
    'Schweregrad mittelschwer (Grenze 9 und 12)' => function () {
        gleich('mittelschwer', gcsSchweregrad(9));
        gleich('mittelschwer', gcsSchweregrad(12));
    },
    'Schweregrad schwer' => fn () => gleich('schwer', gcsSchweregrad(8)),
    'Summe 2 ist ungültig' => fn () => wirft(InvalidArgumentException::class, fn () => gcsSchweregrad(2)),
];
