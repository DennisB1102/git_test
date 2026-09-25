# 🛠 Projekt: Fortbildungs-Tracker

## Einführung

Rettungsfachpersonal muss regelmäßig Fortbildungsstunden nachweisen – die genauen Anforderungen hängen vom Bundesland und Arbeitgeber ab. Du baust eine Laravel-Anwendung, mit der man eigene Fortbildungen erfasst und den Stand gegenüber einem Jahresziel im Blick behält.

Das ist dein erstes eigenständiges Laravel-Projekt. Keine Anleitung – nur Anforderungen. Nutze die Doku.

## Anforderungen

**Benutzer & Auth**

- [ ] Registrierung/Login über ein Starter Kit
- [ ] Jeder Benutzer sieht und bearbeitet **nur seine eigenen** Fortbildungen (Tipp: `auth()->user()->fortbildungen()` – Beziehungen kommen offiziell erst in Modul 6, `hasMany` findest du aber leicht in der Doku)
- [ ] Im Profil kann jeder sein Jahresziel in Stunden festlegen (Standard z. B. 30)

**Fortbildungen**

- [ ] Felder: Titel, Datum, Anbieter, Stunden (auch halbe Stunden!), Kategorie (Enum, z. B. Pflichtfortbildung, Reanimation, Trauma, Pädiatrie, Sonstiges), optionale Notiz
- [ ] Vollständiges CRUD mit Resource-Controller, Form Requests und deutschen Fehlermeldungen
- [ ] Datum darf nicht in der Zukunft liegen, Stunden zwischen 0,5 und 40

**Übersicht / Dashboard**

- [ ] Stunden im laufenden Jahr vs. Jahresziel, mit Fortschrittsbalken
- [ ] Liste der Fortbildungen, filterbar nach Jahr und Kategorie, mit Pagination
- [ ] Stunden je Kategorie im gewählten Jahr

**Technisch**

- [ ] Migrationen, Factories und ein Seeder mit Demodaten (Demo-Benutzer: `demo@example.com`)
- [ ] Layout als Blade-Komponente; wiederkehrende UI-Teile (z. B. Formularfeld mit Fehlermeldung) als eigene Komponenten
- [ ] Mindestens 8 Feature-Tests mit Pest (z. B.: Gast wird auf Login umgeleitet; Benutzer A kann Fortbildung von Benutzer B nicht sehen; Validierung greift) – Testing wird in Modul 6 vertieft, die Grundlagen stehen in der Doku unter [HTTP Tests](https://laravel.com/docs/http-tests)
- [ ] Code mit Pint formatiert, sinnvolle Git-Commits

## Zusatzaufgaben

- [ ] CSV-Export aller Fortbildungen eines Jahres
- [ ] Hochladen eines Teilnahmezertifikats als PDF (Vorgriff auf Modul 6)

## Reflexion

Vergleiche mit deinem Schwarzen Brett aus Modul 3/4: Wie viel Code brauchtest du für Routing, Validierung, Auth, CSRF und Datenbank? Was hat Laravel dir abgenommen – und was verstehst du jetzt besser, weil du es vorher selbst gebaut hast?
