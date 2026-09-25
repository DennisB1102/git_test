# Übungen

Kleine Programmieraufgaben mit automatischen Tests – wie die `javascript-exercises` von The Odin Project, nur für PHP.

## So funktioniert's

1. Öffne den Ordner einer Übung und lies die `README.md`.
2. Bearbeite **nur** die Datei `aufgabe.php`.
3. Prüfe deine Lösung (aus dem Hauptordner des Repositorys):
   ```bash
   php uebungen/pruefen.php 01-hallo-welt
   ```
4. Alle Tests grün (✔)? Weiter zur nächsten Übung. Tipp: Committe jede gelöste Übung.

Alle Übungen auf einmal prüfen: `php uebungen/pruefen.php --alle`

## Musterlösungen

Jede Übung hat einen Ordner `loesung/`. **Schau erst hinein, wenn du die Übung gelöst hast** oder wirklich lange festhängst (mindestens 30–60 Minuten ernsthaft probiert). Vergleiche dann: Was hat die Musterlösung anders gemacht? Ist deine Lösung vielleicht sogar lesbarer? Es gibt fast immer mehrere gute Lösungen.

Die Musterlösungen selbst prüfen: `php uebungen/pruefen.php --alle --loesung`

## Übersicht

| Übung | Thema | Passt zu |
|-------|-------|----------|
| [01-hallo-welt](01-hallo-welt/) | Funktionen, Strings, Standardwerte | Modul 1, Lektion 1 |
| [02-fizzbuzz](02-fizzbuzz/) | Schleifen, Bedingungen, Modulo | Modul 1, Lektion 3 |
| [03-temperatur](03-temperatur/) | Rechnen, Floats, Runden | Modul 1, Lektion 2 |
| [04-palindrom](04-palindrom/) | Strings, Multibyte, Regex | Modul 1, Lektion 6 |
| [05-woerter-zaehlen](05-woerter-zaehlen/) | Regex, Arrays, Sortieren | Modul 1, Lektion 6 |
| [06-array-statistik](06-array-statistik/) | Array-Funktionen, Exceptions | Modul 1, Lektion 5 |
| [07-glasgow-coma-scale](07-glasgow-coma-scale/) | Validierung, Exceptions, `match` | Modul 1, Lektion 4 |
| [08-bankkonto](08-bankkonto/) | Klassen, Kapselung, eigene Exceptions | Modul 2, Lektion 1 |
| [09-stapel](09-stapel/) | Interfaces, Vererbung, `Countable` | Modul 2, Lektion 3 |
| [10-sichtung](10-sichtung/) | Enums, `readonly`, Sortieren, Datum | Modul 2, Lektion 4 |

## Eigene Übungen ergänzen

Lege einen Ordner `NN-name/` an mit `README.md`, `aufgabe.php`, `tests.php` und `loesung/aufgabe.php`. `tests.php` gibt ein Array `Testname => Funktion` zurück. Verfügbare Prüf-Funktionen: `gleich($erwartet, $tatsaechlich)`, `ungefaehr($erwartet, $tatsaechlich, $toleranz)`, `wahr($bedingung)`, `wirft(Exception::class, fn () => ...)`.

Ab Modul 2 lernst du Pest kennen – dann kannst du die Übungen auch dorthin portieren.
