<?php

return [
    'leerer Text' => fn () => gleich([], woerterZaehlen('')),
    'ein Wort' => fn () => gleich(['hallo' => 1], woerterZaehlen('Hallo')),
    'Beispiel aus der Aufgabe' => fn () => gleich(
        ['der' => 2, 'hund' => 2, 'die' => 1, 'katze' => 1, 'und' => 1],
        woerterZaehlen('Der Hund, der Hund und die Katze.'),
    ),
    'Umlaute und Reihenfolge' => fn () => gleich(
        ['übung' => 3, 'macht' => 1, 'meister' => 1],
        woerterZaehlen('Übung, Übung, ÜBUNG macht Meister!'),
    ),
];
