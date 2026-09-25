# Dateien & Uploads

## Einführung

Profilbilder, PDF-Zertifikate, Anhänge: Laravels **Filesystem**-Abstraktion lässt dich Dateien lokal speichern und später ohne Codeänderung zu einem Cloud-Speicher (z. B. S3-kompatibel) wechseln – wieder ein Interface in Aktion.

## Lernziele

- Du kannst Uploads validieren (`file`, `mimes`, `max`, `image`, `dimensions`).
- Du speicherst Dateien mit `Storage` auf verschiedenen Disks.
- Du kennst den Unterschied zwischen öffentlichen und privaten Dateien und kannst private Dateien nur für berechtigte Benutzer ausliefern.

## Aufgaben

1. Lies [File Storage](https://laravel.com/docs/filesystem) bis „Deleting Files“ und in [Requests](https://laravel.com/docs/requests#files) den Abschnitt „Files“.
2. Ergänze im Fortbildungs-Tracker den Upload eines Teilnahmezertifikats (nur PDF, max. 5 MB), gespeichert auf der **privaten** Disk. Der Download läuft über eine Route, die per Policy prüft, ob der Benutzer die Datei sehen darf.
3. Beim Löschen einer Fortbildung wird auch die Datei gelöscht.
4. Teste das mit `Storage::fake()`.

## Wissensüberprüfung

- Warum sollten Zertifikate nicht im `public`-Ordner liegen?
- Was macht `php artisan storage:link`?
- Warum sollte der gespeicherte Dateiname nicht der vom Benutzer hochgeladene sein?
