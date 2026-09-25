# APIs bauen

## Einführung

Nicht jede Anwendung liefert HTML. Mobile Apps, andere Dienste oder ein JavaScript-Frontend brauchen Daten als JSON über eine **API**. Laravel bietet dafür API-Routen, **API Resources** (steuern, welche Felder ausgegeben werden) und **Sanctum** für Token-Authentifizierung.

## Lernziele

- Du verstehst die Grundsätze von REST (Ressourcen, HTTP-Methoden, Statuscodes).
- Du kannst API-Routen und API-Resource-Controller anlegen.
- Du nutzt API Resources, damit keine internen Felder (z. B. Passwort-Hashes) nach außen gelangen.
- Du kannst eine API mit Sanctum-Tokens absichern.
- Du kannst APIs mit einem Tool (z. B. Bruno, Insomnia, `curl`) und mit Feature-Tests testen.
- Du kennst Rate Limiting.

## Aufgaben

1. Lies [Eloquent: API Resources](https://laravel.com/docs/eloquent-resources), [Laravel Sanctum](https://laravel.com/docs/sanctum) (Abschnitt „API Token Authentication“) und in [Routing](https://laravel.com/docs/routing#rate-limiting) den Abschnitt „Rate Limiting“.
2. Lies auf MDN, wie [CORS](https://developer.mozilla.org/de/docs/Web/HTTP/CORS) funktioniert – dir wird der Begriff begegnen.
3. Baue für den Fortbildungs-Tracker eine API (`/api/fortbildungen`) mit Token-Auth. Ein Benutzer kann über die API nur seine eigenen Fortbildungen lesen und anlegen.
4. Teste sie mit einem API-Client (z. B. [Bruno](https://www.usebruno.com)) **und** mit Feature-Tests (`getJson`, `assertJson`).

## Wissensüberprüfung

- Welche Statuscodes gibt deine API bei: erfolgreichem Anlegen, Validierungsfehler, fehlendem Token, fremder Ressource?
- Warum solltest du nie einfach `return $model;` in einer öffentlichen API verwenden?
- Was ist der Unterschied zwischen Session-Auth und Token-Auth?
