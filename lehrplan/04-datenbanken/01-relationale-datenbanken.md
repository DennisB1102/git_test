# Relationale Datenbanken

## Einführung

Eine relationale Datenbank speichert Daten in **Tabellen** (Zeilen und Spalten), die über **Schlüssel** miteinander verknüpft sind. Die Sprache dafür ist **SQL**. Wir starten mit **SQLite** – eine Datenbank, die aus einer einzigen Datei besteht und nichts installieren muss. Laravel nutzt SQLite inzwischen sogar als Standard für neue Projekte. Später kommen MySQL/MariaDB oder PostgreSQL dazu.

## Lernziele

- Du kennst die Begriffe Tabelle, Zeile, Spalte, Primärschlüssel, Fremdschlüssel.
- Du kennst gängige Datentypen (INTEGER, TEXT/VARCHAR, DECIMAL, DATE/DATETIME, BOOLEAN).
- Du kannst SQLite im Terminal und mit einem grafischen Tool bedienen.
- Du kennst den Unterschied zwischen SQLite, MySQL/MariaDB und PostgreSQL grob.

## Aufgaben

1. Lies die Odin-Lektion [„Databases“](https://www.theodinproject.com/lessons/databases-databases-and-sql) (englisch).
2. Installiere einen Datenbank-Client: [TablePlus](https://tableplus.com) (kostenlose Basisversion), [DBeaver](https://dbeaver.io) (Open Source) oder [DB Browser for SQLite](https://sqlitebrowser.org).
3. Lege eine SQLite-Datenbank an: `sqlite3 lernen.sqlite` (falls nicht vorhanden, nutze den grafischen Client).
4. Überfliege die [SQLite-Dokumentation zu Datentypen](https://www.sqlite.org/datatype3.html) – SQLite ist bei Typen deutlich laxer als andere Datenbanken. Sei dir dessen bewusst.

## Wissensüberprüfung

- Was ist ein Primärschlüssel? Was ein Fremdschlüssel?
- Wann würdest du SQLite einsetzen, wann eher MySQL oder PostgreSQL?
- Warum sollte man Geldbeträge in SQL als DECIMAL oder INTEGER (Cent) speichern?
