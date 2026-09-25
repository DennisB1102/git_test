# SQL-Grundlagen

## Einführung

Mit vier Befehlen – **CRUD**: Create (`INSERT`), Read (`SELECT`), Update (`UPDATE`), Delete (`DELETE`) – erledigst du einen Großteil aller Datenbankarbeit. Dazu kommen `CREATE TABLE` & Co. zum Anlegen der Struktur.

## Lernziele

- Du kannst Tabellen mit `CREATE TABLE` anlegen, inkl. `PRIMARY KEY`, `NOT NULL`, `UNIQUE`, `DEFAULT`.
- Du beherrschst `SELECT` mit `WHERE`, `ORDER BY`, `LIMIT`, `LIKE`, `IN`, `BETWEEN`, `IS NULL`.
- Du kannst Daten einfügen, ändern und löschen.
- Du weißt, warum ein `UPDATE`/`DELETE` ohne `WHERE` gefährlich ist.

## Aufgaben

1. Arbeite [SQLBolt](https://sqlbolt.com) Lektionen 1–12 und 13–18 durch (interaktiv, englisch). Das ist die Kernaufgabe dieser Lektion.
2. Lege in deiner SQLite-Datenbank eine Tabelle `medikamente` an (id, name, wirkstoff, darreichungsform, staerke_mg, btm als Boolean). Füge 10 Datensätze ein und schreibe Abfragen:
   - alle BtM-pflichtigen Medikamente,
   - alle, deren Name mit „A“ beginnt, alphabetisch sortiert,
   - die drei mit der höchsten Stärke.
3. Nutze die SQLite-Dokumentation als Nachschlagewerk: [SQL As Understood By SQLite](https://www.sqlite.org/lang.html).

## Wissensüberprüfung

- Schreibe aus dem Kopf: alle Einträge der Tabelle `einsaetze` vom März 2026, nach Datum absteigend.
- Was ist der Unterschied zwischen `WHERE name = NULL` und `WHERE name IS NULL`?
- Was passiert bei `DELETE FROM benutzer;`?
