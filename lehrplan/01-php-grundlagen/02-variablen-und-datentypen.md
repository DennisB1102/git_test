# Variablen & Datentypen

## Einführung

PHP ist dynamisch typisiert – eine Variable kann nacheinander verschiedene Typen haben. Das ist bequem, aber gefährlich. Modernes PHP setzt deshalb stark auf **Typdeklarationen**.

## Lernziele

- Du kennst die skalaren Typen `int`, `float`, `string`, `bool` sowie `array` und `null`.
- Du verstehst den Unterschied zwischen `==` und `===`.
- Du weißt, warum `float` für Geld ungeeignet ist.
- Du kennst Konstanten (`const`, `define`).

## Aufgaben

1. Lies [Variablen – Grundlagen](https://www.php.net/manual/de/language.variables.basics.php).
2. Lies [Typen – Einführung](https://www.php.net/manual/de/language.types.intro.php) und die Unterseiten zu Boolean, Integer, Float, String und NULL.
3. Lies [Vergleichsoperatoren](https://www.php.net/manual/de/language.operators.comparison.php) – besonders die Tabelle zu losen Vergleichen. **Regel: Verwende immer `===` und `!==`**, außer du hast einen sehr guten Grund.
4. Lies [Konstanten](https://www.php.net/manual/de/language.constants.php).
5. Probiere in `php -a` aus und erkläre dir jedes Ergebnis:
   ```php
   var_dump(0.1 + 0.2 === 0.3);
   var_dump("1" == "01");
   var_dump("abc" == 0);
   var_dump(null ?? "Standardwert");
   var_dump(10 / 4, intdiv(10, 4), 10 % 4);
   ```

## Übung

`uebungen/03-temperatur`

## Wissensüberprüfung

- Was ist der Unterschied zwischen `==` und `===`?
- Wie speicherst du Geldbeträge sicher?
- Was macht der Null-Coalescing-Operator `??`?
- Welche Werte gelten in PHP als „falsy“?
