# 🛠 Projekt: Einsatz-Logbuch (CLI)

## Einführung

Jetzt wendest du alles aus Modul 1 an – ohne Anleitung. Du baust ein Kommandozeilen-Programm, mit dem du (fiktive!) Einsätze protokollierst und auswertest.

> 🔒 **Datenschutz:** Verwende ausschließlich **erfundene Daten**. Echte Einsatz- oder Patientendaten haben in einem Übungsprojekt – und besonders in einem öffentlichen GitHub-Repository – nichts verloren (DSGVO, Schweigepflicht nach § 203 StGB).

## Anforderungen

Das Programm wird über `php logbuch.php <befehl>` gesteuert:

- [ ] `neu` – fragt interaktiv ab: Datum (Standard: heute), Einsatzart (z. B. Notfall, KTP, Fehlfahrt), Stichwort, Dauer in Minuten, optional Bemerkung. Speichert in `logbuch.json`.
- [ ] `liste` – zeigt alle Einsätze als übersichtliche Tabelle (mit `str_pad` oder `sprintf` ausgerichtet), neueste zuerst.
- [ ] `statistik` – Anzahl Einsätze je Einsatzart, Gesamtdauer, durchschnittliche Dauer, längster Einsatz.
- [ ] `suche <begriff>` – findet Einsätze, deren Stichwort oder Bemerkung den Begriff enthält (Groß-/Kleinschreibung egal, Umlaute korrekt).
- [ ] `loeschen <nummer>` – löscht einen Eintrag nach Rückfrage.
- [ ] Ungültige Eingaben (z. B. Dauer „abc“ oder negativ, Datum im falschen Format) werden abgefangen, mit verständlicher Meldung – das Programm stürzt nie ab.
- [ ] Unbekannter Befehl oder kein Befehl → Hilfetext.

## Technische Vorgaben

- `declare(strict_types=1);` in jeder Datei
- Jede Aufgabe in einer eigenen Funktion; die Funktionen in einer separaten Datei `funktionen.php` (per `require_once` eingebunden)
- Datum mit `DateTimeImmutable`
- Code liegt in einem eigenen Git-Repository mit sinnvollen Commits

## Zusatzaufgaben

- [ ] `export` – schreibt alle Einsätze als CSV-Datei (`fputcsv`), die sich in Excel/LibreOffice öffnen lässt.
- [ ] Filter für `statistik`: `--monat=2026-03`
- [ ] Farbige Ausgabe im Terminal mit ANSI-Codes.

## Reflexion (wie nach einem Einsatz 😉)

Wenn du fertig bist, beantworte für dich schriftlich in einer `REFLEXION.md` im Projekt:
- Was lief gut? Was war schwierig?
- Welchen Teil deines Codes würdest du jetzt anders schreiben?
- Wo hast du doppelten Code?

Diese Reflexion ist wertvoll: Wenn du das Projekt nach Modul 2 mit OOP neu schreibst, wirst du den Unterschied sehen.
