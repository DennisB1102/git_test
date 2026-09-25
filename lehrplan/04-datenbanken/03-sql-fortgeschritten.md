# JOINs, Gruppierung & Indizes

## Einführung

Daten sind auf mehrere Tabellen verteilt (Benutzer, Aushänge, Kommentare). Mit **JOINs** führst du sie in Abfragen wieder zusammen. Mit **Aggregatfunktionen** und `GROUP BY` erstellst du Auswertungen. **Indizes** machen Abfragen schnell.

## Lernziele

- Du beherrschst `INNER JOIN` und `LEFT JOIN` und kennst den Unterschied.
- Du kannst `COUNT`, `SUM`, `AVG`, `MIN`, `MAX` mit `GROUP BY` und `HAVING` verwenden.
- Du kennst Unterabfragen (Subqueries).
- Du weißt, was ein Index ist und wann er hilft.
- Du kennst Transaktionen (`BEGIN`, `COMMIT`, `ROLLBACK`).

## Aufgaben

1. Wiederhole SQLBolt Lektionen 6–7 (JOINs) und 10–11 (Aggregate), falls noch nicht sicher.
2. Arbeite auf [SQLZoo](https://sqlzoo.net) die Abschnitte *SUM and COUNT* und *JOIN* durch.
3. Lies [„Use The Index, Luke“ – Anatomie eines Index](https://use-the-index-luke.com/de/sql/anatomie-eines-index) (deutsch) – zumindest die ersten Seiten.
4. Lies [Transaktionen in SQLite](https://www.sqlite.org/lang_transaction.html). Überlege: Warum braucht die Überweisung aus Übung 08 in einer Datenbank eine Transaktion?
5. Erweitere deine Datenbank um `wachen` und `fahrzeuge` (jedes Fahrzeug gehört zu einer Wache). Schreibe:
   - alle Fahrzeuge mit dem Namen ihrer Wache,
   - die Anzahl Fahrzeuge je Wache – **auch Wachen ohne Fahrzeug** (Tipp: LEFT JOIN),
   - nur Wachen mit mehr als 2 Fahrzeugen.

## Wissensüberprüfung

- Was ist der Unterschied zwischen `INNER JOIN` und `LEFT JOIN`?
- Was ist der Unterschied zwischen `WHERE` und `HAVING`?
- Warum machen Indizes Lesen schneller, aber Schreiben langsamer?
- Was garantiert eine Transaktion?
