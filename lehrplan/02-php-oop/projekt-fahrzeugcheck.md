# 🛠 Projekt: RTW-Fahrzeugcheck

## Einführung

Du baust eine objektorientierte Kommandozeilen-Anwendung für den Fahrzeugcheck bei Schichtbeginn – mit Composer, Namespaces und Pest-Tests. Die Fachlichkeit kennst du; jetzt geht es darum, sie sauber in Klassen zu modellieren.

## Anforderungen

**Fachlich**

- [ ] Es gibt verschiedene Fahrzeugtypen (mind. RTW, KTW, NEF) mit **eigenen Checklisten** (unterschiedliche Positionen und Soll-Mengen).
- [ ] Checklisten-Positionen haben einen Bereich (z. B. Notfallrucksack, Fahrzeug, Medikamente), eine Bezeichnung, eine Soll-Menge und optional ein Verfallsdatum.
- [ ] Beim Check gibt man je Position die Ist-Menge ein (und ggf. das früheste Verfallsdatum).
- [ ] Der Check erzeugt einen Bericht: fehlende Mengen, abgelaufene und bald ablaufende Artikel (z. B. innerhalb 30 Tagen), Gesamtstatus („einsatzbereit“ / „einsatzbereit mit Mängeln“ / „nicht einsatzbereit“).
- [ ] Welche Positionen einen Mangel „kritisch“ machen, ist je Position konfigurierbar.
- [ ] Abgeschlossene Checks werden als JSON gespeichert und können aufgelistet werden.

**Technisch**

- [ ] Composer-Projekt mit PSR-4-Autoloading, alles in einem eigenen Namespace
- [ ] Mindestens ein **Interface** (z. B. `ChecklistenQuelle` mit einer JSON- und einer fest einprogrammierten Implementierung, oder `BerichtsAusgabe` für Konsole/Datei)
- [ ] Mindestens ein **Enum** (z. B. Status, Fahrzeugtyp)
- [ ] Wertobjekte mit `readonly` wo sinnvoll
- [ ] Die Geschäftslogik (Bewertung eines Checks) hat **keine** Ein-/Ausgabe (kein `echo`, kein `readline`) – dadurch ist sie testbar
- [ ] Pest-Tests für die Geschäftslogik, mindestens 10 sinnvolle Tests
- [ ] Code mit Pint formatiert

## Zusatzaufgaben

- [ ] Nutze das Paket [symfony/console](https://symfony.com/doc/current/components/console.html) für die Befehle – das ist die Grundlage, auf der auch Laravels `artisan` aufbaut.
- [ ] Führe [PHPStan](https://phpstan.org) auf Level 6 oder höher ohne Fehler aus.

## Reflexion

Vergleiche mit deinem Einsatz-Logbuch aus Modul 1: Was ist durch OOP besser geworden? Was vielleicht auch umständlicher?
