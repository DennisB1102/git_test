<?php

return [
    'ungerade Anzahl' => fn () => gleich(
        ['min' => 1, 'max' => 9, 'durchschnitt' => 4.6, 'median' => 4.0],
        statistik([9, 1, 4, 7, 2]),
    ),
    'gerade Anzahl' => fn () => gleich(
        ['min' => 6, 'max' => 15, 'durchschnitt' => 9.75, 'median' => 9.0],
        statistik([8, 15, 6, 10]),
    ),
    'ein Element' => fn () => gleich(
        ['min' => 12, 'max' => 12, 'durchschnitt' => 12.0, 'median' => 12.0],
        statistik([12]),
    ),
    'Rundung auf 2 Stellen' => fn () => gleich(3.33, statistik([1, 2, 7])['durchschnitt']),
    'leere Liste wirft Exception' => fn () => wirft(InvalidArgumentException::class, fn () => statistik([])),
];
