# Funktionen

## Einführung

Funktionen bündeln Code unter einem Namen, machen ihn wiederverwendbar und testbar. Eine gute Funktion macht **eine** Sache und hat einen Namen, der genau das beschreibt.

## Lernziele

- Du kannst Funktionen mit typisierten Parametern und Rückgabewerten schreiben.
- Du kennst Standardwerte, benannte Argumente und variadische Parameter (`...$werte`).
- Du verstehst Gültigkeitsbereiche (Scope) von Variablen.
- Du kennst anonyme Funktionen, Arrow Functions (`fn`) und Callbacks.

## Aufgaben

1. Lies [Funktionen](https://www.php.net/manual/de/language.functions.php) mit allen Unterseiten: benutzerdefinierte Funktionen, Argumente, Rückgabewerte, anonyme Funktionen, Pfeilfunktionen.
2. Lies [Gültigkeitsbereich von Variablen](https://www.php.net/manual/de/language.variables.scope.php). Merke: **`global` vermeiden** – übergib, was eine Funktion braucht, als Parameter.
3. Schreibe eine Funktion `bmi(float $gewichtKg, float $groesseM): float` und eine zweite, die den Wert einer Kategorie zuordnet. Rufe sie mit benannten Argumenten auf: `bmi(groesseM: 1.80, gewichtKg: 82)`.
4. Schreibe eine Funktion `summe(int ...$zahlen): int`.

## Übung

`uebungen/07-glasgow-coma-scale` – hier nutzt du auch schon Exceptions (`throw new InvalidArgumentException(...)`). Lies dazu vorab [Exceptions – Grundlagen](https://www.php.net/manual/de/language.exceptions.php).

## Wissensüberprüfung

- Warum sind Typdeklarationen bei Parametern sinnvoll?
- Was ist der Unterschied zwischen `function () use ($x) {}` und `fn () => $x`?
- Was bedeutet der Rückgabetyp `?string`? Und `void`? Und `never`?
- Was ist eine „pure function“ und warum ist sie leicht zu testen?
