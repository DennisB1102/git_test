# 🛠 Projekt: Schwarzes Brett der Wache

## Einführung

Eine kleine Web-Anwendung ohne Framework: ein digitales schwarzes Brett, auf dem Kolleg:innen Aushänge veröffentlichen (Dienstplan-Tausch, Fortbildungen, Grillfest …). Die Daten landen vorerst in einer JSON-Datei – in Modul 4 ziehst du auf eine Datenbank um.

## Anforderungen

- [ ] Front Controller + Router (aus Lektion 5), Views getrennt vom Code
- [ ] Startseite: alle Aushänge, neueste zuerst, mit Titel, Kategorie, Autor, Datum, Text
- [ ] Filter nach Kategorie (per GET-Parameter, z. B. `/?kategorie=tausch`)
- [ ] Registrierung & Login (Passwörter mit `password_hash`)
- [ ] Nur eingeloggte Benutzer können Aushänge erstellen
- [ ] Nur der Autor kann seinen Aushang bearbeiten und löschen
- [ ] Aushänge haben ein optionales Ablaufdatum und werden danach nicht mehr angezeigt
- [ ] Serverseitige Validierung mit Fehlermeldungen am Feld und Beibehaltung der Eingaben
- [ ] Flash Messages nach Aktionen
- [ ] **Sicherheit:** Jede Ausgabe escaped, jedes Formular mit CSRF-Token, Löschen nur per POST
- [ ] Ein bisschen CSS, damit es benutzbar aussieht (z. B. mit [Pico CSS](https://picocss.com) – ohne eigene Klassen)

## Zusatzaufgaben

- [ ] Bild-Upload zu einem Aushang (Größe und Typ serverseitig prüfen!)
- [ ] Kommentare unter Aushängen

## Reflexion

Notiere, welche Teile mühsam waren (Routing? Validierung? Auth?). In Modul 5 wirst du sehen, dass Laravel genau diese Teile übernimmt – und du wirst es zu schätzen wissen.
