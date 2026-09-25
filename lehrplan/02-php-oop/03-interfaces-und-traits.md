# Interfaces, Traits & Polymorphie

## Einführung

Ein **Interface** ist ein Vertrag: „Jede Klasse, die mich implementiert, hat diese Methoden.“ Code, der nur das Interface kennt, funktioniert mit jeder Implementierung – das nennt man **Polymorphie**. Laravel nutzt das überall: Du kannst z. B. den Cache-Speicher von Datei auf Redis umstellen, ohne deinen Code zu ändern, weil beide dasselbe Interface erfüllen.

**Traits** sind wiederverwendbare Methodensammlungen, die in Klassen „hineinkopiert“ werden. Laravel-Models nutzen z. B. `use HasFactory;` oder `use SoftDeletes;`.

## Lernziele

- Du kannst Interfaces definieren und implementieren.
- Du verstehst, warum man gegen Interfaces statt gegen konkrete Klassen programmiert.
- Du kennst eingebaute Interfaces wie `Countable`, `IteratorAggregate`, `JsonSerializable`, `Stringable`.
- Du kannst Traits einsetzen und kennst ihre Nachteile.

## Aufgaben

1. Lies [Interfaces](https://www.php.net/manual/de/language.oop5.interfaces.php) und [Traits](https://www.php.net/manual/de/language.oop5.traits.php).
2. Überfliege [Vordefinierte Interfaces](https://www.php.net/manual/de/reserved.interfaces.php).
3. Schreibe ein Interface `Benachrichtigung` mit `senden(string $empfaenger, string $text): void` und zwei Implementierungen `KonsolenBenachrichtigung` (gibt aus) und `DateiBenachrichtigung` (schreibt in eine Datei). Eine Klasse `Alarmierung` bekommt im Konstruktor *irgendeine* `Benachrichtigung` übergeben. → Das ist **Dependency Injection**, eines der zentralen Konzepte in Laravel.

## Übung

`uebungen/09-stapel`

## Wissensüberprüfung

- Was ist der Unterschied zwischen einem Interface und einer abstrakten Klasse?
- Was bedeutet Dependency Injection, und warum macht es Code testbarer?
- Wann würdest du einen Trait verwenden – und wann eher nicht?
