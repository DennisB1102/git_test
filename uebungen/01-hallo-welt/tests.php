<?php

return [
    'grüßt mit Namen' => fn () => gleich('Hallo, Dennis!', gruss('Dennis')),
    'grüßt die Welt ohne Argument' => fn () => gleich('Hallo, Welt!', gruss()),
    'grüßt die Welt bei leerem String' => fn () => gleich('Hallo, Welt!', gruss('')),
    'entfernt Leerzeichen' => fn () => gleich('Hallo, Anna!', gruss('  Anna ')),
    'nur Leerzeichen zählt als leer' => fn () => gleich('Hallo, Welt!', gruss('   ')),
];
