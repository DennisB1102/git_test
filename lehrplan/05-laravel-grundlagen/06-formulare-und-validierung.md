# Formulare & Validierung

## Einführung

Weißt du noch, wie aufwendig Validierung, Fehlermeldungen, alte Eingaben und CSRF-Schutz in Modul 3 waren? In Laravel sind das wenige Zeilen.

## Lernziele

- Du kannst Formulare mit `@csrf` und Method Spoofing (`@method('PUT')`) bauen.
- Du validierst Eingaben mit `$request->validate()` und mit **Form Requests**.
- Du zeigst Fehler mit `@error` und alte Eingaben mit `old()` an.
- Du kennst gängige Validierungsregeln (required, email, min/max, unique, exists, date, after, `Rule::enum`).
- Du kannst Flash Messages mit `session()` bzw. `->with()` nutzen.
- Du kannst Validierungsmeldungen auf Deutsch anzeigen.

## Aufgaben

1. Lies [Validation](https://laravel.com/docs/validation) – „Validation Quickstart“, „Form Request Validation“ und die Liste „Available Validation Rules“ überfliegen.
2. Lies [CSRF Protection](https://laravel.com/docs/csrf) und in [Session](https://laravel.com/docs/session) den Abschnitt „Flash Data“.
3. Lies [Localization](https://laravel.com/docs/localization). Für deutsche Validierungsmeldungen gibt es das Community-Paket [laravel-lang/lang](https://laravel-lang.com) – oder du veröffentlichst die Sprachdateien und übersetzt selbst.
4. Vervollständige den `FahrzeugController`: Anlegen, Bearbeiten, Löschen – mit Form Request, deutschen Fehlermeldungen und Flash Message nach jeder Aktion.

## Wissensüberprüfung

- Warum braucht ein HTML-Formular `@method('DELETE')`, um eine DELETE-Route aufzurufen?
- Was passiert, wenn die Validierung fehlschlägt? (Beschreibe den Ablauf.)
- Wann lohnt sich ein Form Request statt `$request->validate()`?
- Welcher Statuscode kommt zurück, wenn der CSRF-Token fehlt?
