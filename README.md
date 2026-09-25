# 🐘 Der Laravel-Pfad

Ein persönlicher, kostenloser Lehrplan für **PHP & Laravel** – aufgebaut nach dem Vorbild von [The Odin Project](https://www.theodinproject.com).

Vom ersten `echo "Hallo Welt";` bis zur eigenen, getesteten und deployten Laravel-Anwendung.

## Das Prinzip

> **Lesen → Üben → Bauen**

- **Lesen:** Jede Lektion erklärt, *warum* ein Thema wichtig ist, und verlinkt dann auf die besten freien Quellen – vor allem das [PHP-Handbuch](https://www.php.net/manual/de/) und die [Laravel-Dokumentation](https://laravel.com/docs). Wir erfinden das Rad nicht neu.
- **Üben:** Kleine Übungen mit automatischen Tests in [`uebungen/`](uebungen/).
- **Bauen:** Jedes Modul endet mit einem Projekt ohne Schritt-für-Schritt-Anleitung. Dort passiert das eigentliche Lernen.

## Der Pfad

| Modul | Thema | Projekt | Aufwand* |
|-------|-------|---------|----------|
| [0](lehrplan/00-einfuehrung/) | Einführung & Werkzeuge – Setup, Git, HTTP, HTML/CSS | – | 10–20 h |
| [1](lehrplan/01-php-grundlagen/) | PHP-Grundlagen – Syntax, Typen, Arrays, Strings, Fehler | Einsatz-Logbuch (CLI) | 40–60 h |
| [2](lehrplan/02-php-oop/) | Objektorientiertes PHP – Klassen, Interfaces, Enums, Composer, Pest | RTW-Fahrzeugcheck | 40–60 h |
| [3](lehrplan/03-web-mit-php/) | Web mit reinem PHP – Formulare, Sessions, Sicherheit, MVC | Schwarzes Brett der Wache | 25–40 h |
| [4](lehrplan/04-datenbanken/) | Datenbanken & SQL – SQL, JOINs, Design, PDO | Schwarzes Brett mit DB | 25–40 h |
| [5](lehrplan/05-laravel-grundlagen/) | Laravel-Grundlagen – Routing, Blade, Eloquent, Validierung, Auth | Fortbildungs-Tracker | 50–70 h |
| [6](lehrplan/06-laravel-fortgeschritten/) | Laravel fortgeschritten – Beziehungen, Policies, Tests, Queues, APIs, Livewire | Wissensdatenbank | 60–90 h |
| [7](lehrplan/07-abschluss/) | Abschluss – CI, Deployment, Datenschutz | 🎓 Digitaler Ausbildungsnachweis | 60–100 h |

\* Grobe Richtwerte. Bei 8–10 Stunden pro Woche ergibt das etwa 9–15 Monate. Das ist normal.

## Loslegen

1. Lies [Modul 0, Lektion 1: Wie dieser Lehrplan funktioniert](lehrplan/00-einfuehrung/01-wie-dieser-lehrplan-funktioniert.md).
2. Hake deinen Fortschritt in [`FORTSCHRITT.md`](FORTSCHRITT.md) ab.
3. Übungen prüfen:
   ```bash
   php uebungen/pruefen.php 01-hallo-welt
   ```

## Voraussetzungen

- Ein Rechner (Windows, macOS oder Linux) und Internet
- Englisch-Lesekenntnisse sind hilfreich – viele der besten Quellen sind englisch. Die Lektionen selbst sind auf Deutsch.
- Keine Programmiervorkenntnisse nötig

## Hinweise

- **Datenschutz:** Alle Projekte haben einen Rettungsdienst-Bezug, weil das motiviert und du die Fachlichkeit kennst. Verwende trotzdem **immer erfundene Daten** – nie echte Patienten-, Einsatz- oder Personaldaten.
- **Aktualität:** PHP und Laravel entwickeln sich schnell (Laravel erscheint jährlich in einer neuen Hauptversion). Verlinkt wird deshalb bevorzugt auf die jeweils *aktuelle* Dokumentation. Wenn ein Link nicht mehr passt: Korrigiere ihn – es ist dein Lehrplan.
- **Keine Heilkunde:** Übungen mit medizinischem Bezug (GCS, Sichtung, …) sind reine Programmierübungen und keine Werkzeuge für die Patientenversorgung.
