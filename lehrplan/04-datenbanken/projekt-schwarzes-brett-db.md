# 🛠 Projekt: Schwarzes Brett mit Datenbank

## Einführung

Du ziehst dein Schwarzes Brett aus Modul 3 von JSON-Dateien auf eine SQLite-Datenbank um und erweiterst es. Dabei merkst du, wie gut (oder schlecht) du Datenzugriff und Darstellung getrennt hast.

## Anforderungen

- [ ] Datenbankschema als SQL-Datei im Projekt (`datenbank/schema.sql`) plus ein Skript, das die Datenbank anlegt und mit Beispieldaten füllt (`php datenbank/einrichten.php`)
- [ ] Tabellen mindestens: `benutzer`, `aushaenge`, `kategorien`, `kommentare` mit korrekten Fremdschlüsseln
- [ ] Alle Datenbankzugriffe in Repository-Klassen gekapselt; Controller enthalten kein SQL
- [ ] Ausschließlich Prepared Statements
- [ ] Neu: Kommentare zu Aushängen
- [ ] Neu: Volltextsuche über Titel und Text (`LIKE` genügt)
- [ ] Neu: Startseite zeigt je Aushang die Anzahl der Kommentare – mit **einer** Abfrage (JOIN + GROUP BY), nicht mit einer Abfrage pro Aushang
- [ ] Neu: Seitenweise Anzeige (Pagination), 10 Aushänge pro Seite (`LIMIT`/`OFFSET`)

## Zusatzaufgaben

- [ ] n:m-Beziehung: Aushänge können mehrere Tags haben
- [ ] Umstellbar auf MySQL/MariaDB nur durch Ändern der Verbindungskonfiguration

## Reflexion

Zähle, wie viele Zeilen Code du für Routing, Validierung, Auth, CSRF und Datenbankzugriff geschrieben hast. Diese Zahl wirst du in Modul 5 vergleichen.
