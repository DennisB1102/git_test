<?php

function befuelle(Sammlung $sammlung): Sammlung
{
    foreach (['a', 'b', 'c'] as $wert) {
        $sammlung->hinzufuegen($wert);
    }
    return $sammlung;
}

return [
    'beide implementieren Sammlung' => function () {
        wahr(new Stapel() instanceof Sammlung);
        wahr(new Warteschlange() instanceof Sammlung);
    },
    'neu erstellt ist leer' => function () {
        gleich(true, (new Stapel())->istLeer());
        gleich(0, count(new Warteschlange()));
    },
    'count zählt' => fn () => gleich(3, count(befuelle(new Stapel()))),
    'Stapel ist LIFO' => function () {
        $s = befuelle(new Stapel());
        gleich('c', $s->entnehmen());
        gleich('b', $s->entnehmen());
        gleich(1, count($s));
    },
    'Warteschlange ist FIFO' => function () {
        $w = befuelle(new Warteschlange());
        gleich('a', $w->entnehmen());
        gleich('b', $w->entnehmen());
        gleich(1, count($w));
    },
    'oben entfernt nichts' => function () {
        $s = befuelle(new Stapel());
        gleich('c', $s->oben());
        gleich(3, count($s));
        gleich('a', befuelle(new Warteschlange())->oben());
    },
    'leerer Stapel wirft' => fn () => wirft(UnderflowException::class, fn () => (new Stapel())->entnehmen()),
    'leere Warteschlange wirft' => fn () => wirft(UnderflowException::class, fn () => (new Warteschlange())->oben()),
];
