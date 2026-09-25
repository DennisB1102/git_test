# Autorisierung: Gates & Policies

## Einführung

**Authentifizierung**: *Wer bist du?* **Autorisierung**: *Was darfst du?* Wie im Rettungsdienst die Kompetenzen: Nicht jede:r darf jede Maßnahme durchführen. In Laravel regeln **Policies**, wer welches Model sehen, bearbeiten oder löschen darf.

Fehlende Autorisierungsprüfungen gehören zu den häufigsten Sicherheitslücken überhaupt („Broken Access Control“, Platz 1 der OWASP Top 10 in der Ausgabe 2021).

## Lernziele

- Du kannst Gates und Policies schreiben und registrieren.
- Du prüfst Berechtigungen in Controllern (`Gate::authorize`, `$this->authorize` bzw. `can`-Middleware) und in Blade (`@can`).
- Du kannst Rollen (z. B. Mitarbeiter:in, Praxisanleiter:in, Wachenleitung) einfach umsetzen.

## Aufgaben

1. Lies [Authorization](https://laravel.com/docs/authorization) komplett.
2. Ersetze in deinem Fortbildungs-Tracker alle manuellen „gehört das mir?“-Prüfungen durch eine Policy.
3. Füge eine Rolle `admin` hinzu (einfache Spalte oder Enum am User), die alle Fortbildungen sehen, aber nicht bearbeiten darf. Setze das mit der Policy um.
4. Schreibe Tests, die beweisen, dass Benutzer A die Fortbildung von Benutzer B **nicht** bearbeiten kann (erwarteter Status: 403).

## Wissensüberprüfung

- Was ist der Unterschied zwischen einem Gate und einer Policy?
- Warum reicht es nicht, den „Bearbeiten“-Button in der View auszublenden?
- Was macht die `before`-Methode einer Policy?

## Zusätzliche Ressourcen

- Für komplexere Rollen/Rechte ist das Paket [spatie/laravel-permission](https://spatie.be/docs/laravel-permission) verbreitet. Für den Anfang reicht eine einfache Rollen-Spalte.
