# Artisan, Tinker & Debugging

## Einführung

Werkzeuge, die dir das Leben leichter machen: **Artisan** (Kommandozeile), **Tinker** (interaktive Konsole mit deiner App geladen), **Laravel-Logs**, `dd()`/`dump()` und – sehr empfehlenswert – ein Debug-Werkzeug, das dir zeigt, welche SQL-Abfragen eine Seite ausführt.

## Lernziele

- Du kennst die wichtigsten Artisan-Befehle und kannst eigene Befehle schreiben.
- Du kannst in Tinker Models abfragen und anlegen.
- Du debuggst mit `dd()`, `dump()`, Logs und Laravels Fehlerseite.
- Du kannst dir die ausgeführten SQL-Abfragen einer Seite anzeigen lassen.

## Aufgaben

1. Lies [Artisan Console](https://laravel.com/docs/artisan) – inkl. „Tinker“ und „Writing Commands“.
2. Lies [Logging](https://laravel.com/docs/logging) bis „Writing Log Messages“.
3. Installiere ein Debug-Tool: z. B. [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) (nur als Dev-Abhängigkeit!) oder nutze [Laravel Telescope](https://laravel.com/docs/telescope). Schau dir an, wie viele Abfragen deine Fahrzeug-Übersicht erzeugt.
4. Schreibe einen eigenen Artisan-Befehl `php artisan fahrzeuge:bericht`, der die Anzahl der Fahrzeuge je Typ als Tabelle ausgibt.

## Wissensüberprüfung

- Wo findest du Laravels Logdatei?
- Was ist der Unterschied zwischen `dd()` und `dump()`?
- Warum darf `APP_DEBUG=true` niemals auf einem Live-Server stehen?
