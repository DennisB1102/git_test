# Dateien & JSON

## Einführung

Bevor wir Datenbanken nutzen, speichern wir Daten in Dateien. JSON ist dabei das Standardformat für strukturierte Daten – und später die Sprache von APIs.

## Lernziele

- Du kannst Dateien lesen und schreiben (`file_get_contents`, `file_put_contents`, `file`).
- Du kannst Arrays in JSON umwandeln und zurück (`json_encode`, `json_decode`).
- Du kennst `JSON_PRETTY_PRINT`, `JSON_UNESCAPED_UNICODE` und `JSON_THROW_ON_ERROR`.
- Du kannst Kommandozeilen-Argumente auslesen (`$argv`) und Eingaben abfragen (`readline`).
- Du kennst `DateTimeImmutable` für Datum und Uhrzeit.

## Aufgaben

1. Lies [file_get_contents](https://www.php.net/manual/de/function.file-get-contents.php) und [file_put_contents](https://www.php.net/manual/de/function.file-put-contents.php).
2. Lies [json_encode](https://www.php.net/manual/de/function.json-encode.php) und [json_decode](https://www.php.net/manual/de/function.json-decode.php) – insbesondere den Parameter `associative`.
3. Lies [$argv](https://www.php.net/manual/de/reserved.variables.argv.php) und [readline](https://www.php.net/manual/de/function.readline.php).
4. Lies [DateTimeImmutable](https://www.php.net/manual/de/class.datetimeimmutable.php) und das [Datumsformat](https://www.php.net/manual/de/datetime.format.php). Verwende `DateTimeImmutable` statt `DateTime` – warum, erfährst du in der Doku.
5. Schreibe ein Skript `notiz.php`, das `php notiz.php "Mein Text"` in eine JSON-Datei anhängt (mit Zeitstempel) und `php notiz.php --liste` alle Notizen ausgibt.

## Wissensüberprüfung

- Was ist der Unterschied zwischen `json_decode($json)` und `json_decode($json, true)`?
- Warum ist `JSON_THROW_ON_ERROR` sinnvoll?
- Was ist `$argv[0]`?
- Warum ist `DateTimeImmutable` sicherer als `DateTime`?
