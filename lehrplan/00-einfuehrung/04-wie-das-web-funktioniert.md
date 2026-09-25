# Wie das Web funktioniert

## Einführung

PHP ist eine **serverseitige** Sprache: Der Code läuft auf dem Server, erzeugt (meist) HTML und schickt es an den Browser. Um PHP und Laravel zu verstehen, musst du wissen, was zwischen Browser und Server passiert.

## Lernziele

- Du kannst den Weg von der URL-Eingabe bis zur fertigen Seite grob beschreiben.
- Du kennst den Aufbau von HTTP-Requests und -Responses.
- Du kennst die HTTP-Methoden GET, POST, PUT/PATCH, DELETE.
- Du kennst die wichtigsten Statuscodes (200, 301/302, 404, 403, 419, 422, 500).

## Aufgaben

1. Lies auf MDN [„Überblick über HTTP“](https://developer.mozilla.org/de/docs/Web/HTTP/Overview).
2. Lies auf MDN [„HTTP-Anfragemethoden“](https://developer.mozilla.org/de/docs/Web/HTTP/Methods) und [„HTTP-Statuscodes“](https://developer.mozilla.org/de/docs/Web/HTTP/Status) (überfliegen, Nachschlagewerk).
3. Öffne in deinem Browser die Entwicklertools (F12) → Reiter **Netzwerk**. Lade eine beliebige Seite neu und klicke auf den ersten Request. Finde: Methode, Statuscode, Request-Header, Response-Header.
4. Führe im Terminal aus und versuche, die Ausgabe zu verstehen:
   ```bash
   curl -I https://www.php.net
   ```

## Wissensüberprüfung

- Was ist der Unterschied zwischen Client und Server?
- Warum ist HTTP „zustandslos“ – und welches Problem entsteht dadurch für Logins?
- Wann verwendet man GET, wann POST?
- Was bedeutet Statuscode 404, was 500?

## Zusätzliche Ressourcen

- [How DNS works (Comic)](https://howdns.works/)
