# Arrays

## Einführung

Arrays sind in PHP die wichtigste Datenstruktur – sie sind Liste und Wörterbuch (Map) in einem. In Laravel wirst du ihnen ständig begegnen (und später den *Collections*, die auf Arrays aufbauen).

## Lernziele

- Du kennst indizierte, assoziative und mehrdimensionale Arrays.
- Du kannst Arrays mit `foreach` durchlaufen – mit und ohne Schlüssel.
- Du beherrschst die wichtigsten Array-Funktionen: `count`, `in_array`, `array_key_exists`, `array_map`, `array_filter`, `array_reduce`, `sort`/`usort`, `array_keys`, `array_values`, `array_merge`, `array_slice`.
- Du kennst Destrukturierung: `[$a, $b] = $array;`

## Aufgaben

1. Lies [Arrays](https://www.php.net/manual/de/language.types.array.php).
2. Überfliege die [Liste der Array-Funktionen](https://www.php.net/manual/de/ref.array.php) – nicht auswendig lernen, aber wissen, dass es sie gibt.
3. Lies [Sortieren von Arrays](https://www.php.net/manual/de/array.sorting.php).
4. Lege ein Array mit 5 Kolleg:innen an (`name`, `qualifikation`, `stunden`). Gib aus:
   - alle Namen alphabetisch (`array_column` + `sort`),
   - nur Notfallsanitäter:innen (`array_filter`),
   - die Gesamtstunden (`array_sum` + `array_column` oder `array_reduce`),
   - die Liste sortiert nach Stunden absteigend (`usort` + `<=>`).

## Übung

`uebungen/06-array-statistik`

## Wissensüberprüfung

- Was ist der Unterschied zwischen `sort()` und `asort()`?
- Warum gibt `array_filter()` manchmal Arrays mit „Lücken“ im Index zurück, und wie behebst du das?
- Was macht der Spaceship-Operator `<=>`?
- Arbeitet `array_map` auf dem Original oder auf einer Kopie?
