# Datenbankdesign

## Einführung

Ein gutes Datenbankschema ist schwer nachträglich zu ändern – es lohnt sich, vorher nachzudenken. Die wichtigsten Werkzeuge: Beziehungstypen erkennen und **Normalisierung** (Redundanz vermeiden).

## Lernziele

- Du erkennst 1:1-, 1:n- und n:m-Beziehungen und setzt sie in Tabellen um (n:m → Zwischentabelle / Pivot-Tabelle).
- Du kennst die ersten drei Normalformen in Grundzügen.
- Du kannst ein ER-Diagramm zeichnen.
- Du kennst Fremdschlüssel-Aktionen (`ON DELETE CASCADE`, `SET NULL`, `RESTRICT`).

## Aufgaben

1. Lies die Odin-Lektion [„Databases and SQL“](https://www.theodinproject.com/lessons/databases-databases-and-sql) (Abschnitt zu Beziehungen) und den Wikipedia-Artikel [Normalisierung](https://de.wikipedia.org/wiki/Normalisierung_(Datenbank)) bis einschließlich 3NF.
2. Zeichne ein ER-Diagramm (Papier, [draw.io](https://app.diagrams.net) oder [dbdiagram.io](https://dbdiagram.io)) für folgendes Szenario:
   > Eine Rettungswache hat mehrere Mitarbeitende. Mitarbeitende haben genau eine Qualifikation (RS, NotSan, …) und können mehrere Fortbildungen besucht haben; eine Fortbildung hat viele Teilnehmende. Mitarbeitende werden Schichten zugeteilt; jede Schicht gehört zu genau einem Fahrzeug.
3. Überführe das Diagramm in `CREATE TABLE`-Anweisungen mit Fremdschlüsseln. In SQLite: `PRAGMA foreign_keys = ON;` nicht vergessen!

## Wissensüberprüfung

- Wie bildest du eine n:m-Beziehung in Tabellen ab?
- Was ist Redundanz, und welches Problem entsteht bei Änderungen?
- Was passiert mit den Kommentaren eines Aushangs bei `ON DELETE CASCADE`, wenn der Aushang gelöscht wird?
