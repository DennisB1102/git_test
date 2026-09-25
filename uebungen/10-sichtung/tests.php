<?php

function patient(string $kennung, Sichtungskategorie $k, string $uhrzeit): Patient
{
    return new Patient($kennung, $k, new DateTimeImmutable("2026-01-01 {$uhrzeit}"));
}

return [
    'Enum hat vier Fälle mit Werten 1–4' => fn () => gleich(
        [1, 2, 3, 4],
        array_map(fn ($k) => $k->value, Sichtungskategorie::cases()),
    ),
    'Farben' => function () {
        gleich('rot', Sichtungskategorie::SK1->farbe());
        gleich('gelb', Sichtungskategorie::SK2->farbe());
        gleich('grün', Sichtungskategorie::SK3->farbe());
        gleich('blau', Sichtungskategorie::SK4->farbe());
    },
    'Patient ist readonly' => fn () => wirft(Error::class, function () {
        $p = patient('P1', Sichtungskategorie::SK3, '10:00');
        $p->kategorie = Sichtungskategorie::SK1;
    }),
    'Sortierung nach Kategorie, dann Zeit' => function () {
        $liste = new Sichtungsliste();
        $liste->hinzufuegen(patient('P1', Sichtungskategorie::SK3, '10:00'));
        $liste->hinzufuegen(patient('P2', Sichtungskategorie::SK1, '10:05'));
        $liste->hinzufuegen(patient('P3', Sichtungskategorie::SK2, '10:01'));
        $liste->hinzufuegen(patient('P4', Sichtungskategorie::SK1, '10:02'));
        gleich(['P4', 'P2', 'P3', 'P1'], array_map(fn ($p) => $p->kennung, $liste->sortiert()));
    },
    'doppelte Kennung wirft' => function () {
        $liste = new Sichtungsliste();
        $liste->hinzufuegen(patient('P1', Sichtungskategorie::SK3, '10:00'));
        wirft(InvalidArgumentException::class, fn () => $liste->hinzufuegen(patient('P1', Sichtungskategorie::SK1, '10:01')));
    },
    'Anzahl je Kategorie inkl. Nullen' => function () {
        $liste = new Sichtungsliste();
        $liste->hinzufuegen(patient('P1', Sichtungskategorie::SK3, '10:00'));
        $liste->hinzufuegen(patient('P2', Sichtungskategorie::SK3, '10:01'));
        $liste->hinzufuegen(patient('P3', Sichtungskategorie::SK1, '10:02'));
        gleich(['SK1' => 1, 'SK2' => 0, 'SK3' => 2, 'SK4' => 0], $liste->anzahlJeKategorie());
    },
    'Umsichten ändert die Kategorie' => function () {
        $liste = new Sichtungsliste();
        $liste->hinzufuegen(patient('P1', Sichtungskategorie::SK3, '10:00'));
        $liste->hinzufuegen(patient('P2', Sichtungskategorie::SK2, '10:01'));
        $liste->umsichten('P1', Sichtungskategorie::SK1);
        gleich('P1', $liste->sortiert()[0]->kennung);
        gleich(Sichtungskategorie::SK1, $liste->sortiert()[0]->kategorie);
    },
    'Umsichten unbekannter Kennung wirft' => fn () => wirft(
        OutOfBoundsException::class,
        fn () => (new Sichtungsliste())->umsichten('X', Sichtungskategorie::SK1),
    ),
];
