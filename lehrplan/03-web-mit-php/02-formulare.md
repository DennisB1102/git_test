# Formulare & Superglobals

## Einführung

Formulare sind der Hauptweg, wie Benutzer Daten an deinen Server schicken. PHP stellt sie in **Superglobals** bereit: `$_GET`, `$_POST`, `$_SERVER`, `$_FILES`, `$_COOKIE`, `$_SESSION`.

**Goldene Regel: Traue niemals Benutzereingaben.** Alles, was von außen kommt, muss validiert werden – auch wenn das HTML-Formular `required` hat, denn das lässt sich trivial umgehen.

## Lernziele

- Du kannst Formulardaten per GET und POST verarbeiten.
- Du kannst Eingaben serverseitig validieren und Fehlermeldungen mit den alten Eingaben zurück ins Formular geben.
- Du kennst das **Post/Redirect/Get**-Muster.
- Du kannst Datei-Uploads grundsätzlich verarbeiten.

## Aufgaben

1. Lies [Variablen aus externen Quellen](https://www.php.net/manual/de/language.variables.external.php) und [Superglobals](https://www.php.net/manual/de/language.variables.superglobals.php).
2. Lies [filter_var](https://www.php.net/manual/de/function.filter-var.php) und die [Validierungsfilter](https://www.php.net/manual/de/filter.filters.validate.php).
3. Lies über das [Post/Redirect/Get-Muster](https://de.wikipedia.org/wiki/Post/Redirect/Get).
4. Baue ein Kontaktformular (Name, E-Mail, Nachricht) mit:
   - serverseitiger Validierung (Pflichtfelder, gültige E-Mail, Nachricht 10–1000 Zeichen),
   - Fehlermeldungen direkt am jeweiligen Feld,
   - Beibehaltung der Eingaben bei Fehlern,
   - Speicherung in einer JSON-Datei und Weiterleitung auf eine Danke-Seite (PRG).
5. Lies [Datei-Uploads mit POST](https://www.php.net/manual/de/features.file-upload.post-method.php) und das Kapitel [Häufige Fallstricke](https://www.php.net/manual/de/features.file-upload.common-pitfalls.php).

## Wissensüberprüfung

- Warum reicht HTML-Validierung (`required`, `type="email"`) nicht aus?
- Welches Problem löst Post/Redirect/Get?
- Warum darfst du beim Upload nie dem vom Browser gesendeten Dateinamen oder MIME-Typ vertrauen?
