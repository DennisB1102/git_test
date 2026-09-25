<?php

return [
    'neues Konto hat Kontostand 0' => fn () => gleich(0, (new Konto('Dennis'))->kontostand()),
    'Inhaber wird gespeichert' => fn () => gleich('Dennis', (new Konto('Dennis'))->inhaber()),
    'Startbetrag' => fn () => gleich(5000, (new Konto('Dennis', 5000))->kontostand()),
    'negativer Startbetrag wirft' => fn () => wirft(InvalidArgumentException::class, fn () => new Konto('X', -1)),
    'einzahlen erhöht den Kontostand' => function () {
        $konto = new Konto('Dennis');
        $konto->einzahlen(1999);
        $konto->einzahlen(1);
        gleich(2000, $konto->kontostand());
    },
    'einzahlen von 0 wirft' => fn () => wirft(InvalidArgumentException::class, fn () => (new Konto('X'))->einzahlen(0)),
    'abheben verringert den Kontostand' => function () {
        $konto = new Konto('Dennis', 1000);
        $konto->abheben(300);
        gleich(700, $konto->kontostand());
    },
    'abheben ohne Deckung wirft eigene Exception' => fn () => wirft(
        DeckungFehltException::class,
        fn () => (new Konto('X', 100))->abheben(101),
    ),
    'DeckungFehltException ist eine RuntimeException' => fn () => wahr(is_subclass_of(DeckungFehltException::class, RuntimeException::class)),
    'keine public Eigenschaften (Kapselung)' => fn () => gleich(
        [],
        (new ReflectionClass(Konto::class))->getProperties(ReflectionProperty::IS_PUBLIC),
        'Eigenschaften sollten private sein – Zugriff nur über Methoden.',
    ),
    'überweisen bucht auf beiden Konten' => function () {
        $a = new Konto('A', 1000);
        $b = new Konto('B');
        $a->ueberweisen($b, 400);
        gleich(600, $a->kontostand());
        gleich(400, $b->kontostand());
    },
    'fehlgeschlagene Überweisung ändert nichts' => function () {
        $a = new Konto('A', 100);
        $b = new Konto('B', 50);
        wirft(DeckungFehltException::class, fn () => $a->ueberweisen($b, 500));
        gleich(100, $a->kontostand());
        gleich(50, $b->kontostand());
    },
];
