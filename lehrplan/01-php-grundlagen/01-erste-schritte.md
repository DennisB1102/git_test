# Erste Schritte mit PHP

## Einführung

PHP-Code steht zwischen `<?php` und (optional) `?>`. In reinen PHP-Dateien lässt man das schließende `?>` weg – das vermeidet versehentliche Leerzeichen in der Ausgabe.

## Lernziele

- Du kannst ein PHP-Skript im Terminal ausführen.
- Du kennst `echo`, `print`, `var_dump()` und Kommentare.
- Du weißt, was `declare(strict_types=1);` bewirkt.

## Aufgaben

1. Lies im PHP-Handbuch: [Grundlegende Syntax](https://www.php.net/manual/de/language.basic-syntax.php) (alle Unterseiten).
2. Lies [Kommentare](https://www.php.net/manual/de/language.basic-syntax.comments.php).
3. Lies über [strikte Typisierung](https://www.php.net/manual/de/language.types.declarations.php#language.types.declarations.strict). **Gewöhne dir an, jede Datei mit `declare(strict_types=1);` zu beginnen.** Das verhindert viele heimliche Typumwandlungen.
4. Schreibe ein Skript `ich.php`, das deinen Namen, deinen Beruf und dein Lieblingsessen ausgibt – jeweils in einer eigenen Zeile.

> 💡 **Sprache des Handbuchs:** Die deutsche Version des PHP-Handbuchs ist teilweise veraltet oder unvollständig übersetzt. Wenn dir etwas merkwürdig vorkommt, stelle oben auf **English** um – die englische Version ist immer aktuell.

## Übung

`uebungen/01-hallo-welt` – lies die `README.md` der Übung, bearbeite `aufgabe.php`, und prüfe mit:

```bash
php uebungen/pruefen.php 01-hallo-welt
```

## Wissensüberprüfung

- Warum lässt man `?>` am Dateiende weg?
- Was ist der Unterschied zwischen `echo` und `var_dump()`?
- Was passiert mit `strict_types=1`, wenn du einer Funktion mit `int`-Parameter den String `"5"` übergibst?
