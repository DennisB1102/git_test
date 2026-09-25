# PHP im Browser

## Einführung

Bisher lief PHP im Terminal. Im Web nimmt ein Webserver die HTTP-Anfrage entgegen, lässt PHP das Skript ausführen und schickt die Ausgabe als Antwort zurück. Für die Entwicklung bringt PHP einen eingebauten Server mit.

## Lernziele

- Du kannst den eingebauten PHP-Webserver starten.
- Du kannst PHP und HTML mischen (alternative Syntax für Templates).
- Du verstehst, dass PHP für **jeden Request neu startet** und nichts im Speicher behält.
- Du kannst HTTP-Header und Statuscodes setzen (`header()`, `http_response_code()`).

## Aufgaben

1. Lies [Der eingebaute Webserver](https://www.php.net/manual/de/features.commandline.webserver.php).
2. Lies [Alternative Syntax für Kontrollstrukturen](https://www.php.net/manual/de/control-structures.alternative-syntax.php) – so sehen PHP-Templates aus (und später ähnlich Blade).
3. Starte `php -S localhost:8000` in einem Ordner mit einer `index.php`, die eine HTML-Tabelle aus einem PHP-Array erzeugt (z. B. deine Kolleg:innen aus Modul 1).
4. Füge eine `zaehler.php` hinzu, die bei jedem Aufruf `$zaehler++` ausgibt. Warum steht da immer 1? (Merke dir das – Sessions lösen das Problem.)
5. Lies [header()](https://www.php.net/manual/de/function.header.php) und leite von `/alt.php` per 302 auf `/index.php` um. Beobachte das im Netzwerk-Tab.

## Wissensüberprüfung

- Warum „vergisst“ PHP zwischen zwei Requests alle Variablen?
- Warum muss `header()` vor jeder Ausgabe aufgerufen werden?
- Warum ist der eingebaute Server nicht für den Produktivbetrieb geeignet?
