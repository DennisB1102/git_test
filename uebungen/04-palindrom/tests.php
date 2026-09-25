<?php

return [
    'Otto' => fn () => gleich(true, istPalindrom('Otto')),
    'Rentner' => fn () => gleich(true, istPalindrom('Rentner')),
    'Reliefpfeiler' => fn () => gleich(true, istPalindrom('Reliefpfeiler')),
    'mit Leer- und Satzzeichen' => fn () => gleich(true, istPalindrom('Eine güldne, gute Tugend: Lüge nie!')),
    'Umlaute' => fn () => gleich(true, istPalindrom('Ötö')),
    'kein Palindrom' => fn () => gleich(false, istPalindrom('Notfallsanitäter')),
    'leerer String' => fn () => gleich(true, istPalindrom('')),
];
