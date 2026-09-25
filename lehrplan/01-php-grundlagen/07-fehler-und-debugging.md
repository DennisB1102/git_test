# Fehler & Debugging

## Einführung

Du wirst mehr Zeit mit Fehlersuche verbringen als mit Code schreiben. Das ist normal – und eine Fähigkeit, die man trainieren kann. Systematisches Vorgehen hilft, ganz wie beim Abarbeiten eines Schemas: erst sichern, was man weiß, dann Hypothesen bilden und gezielt prüfen.

## Lernziele

- Du kannst Fehlermeldungen lesen: Art, Datei, Zeile, Stack Trace.
- Du kennst den Unterschied zwischen Errors, Warnings, Notices und Exceptions.
- Du kannst Exceptions werfen, fangen (`try/catch/finally`) und eigene Exceptions definieren.
- Du debuggst mit `var_dump()`/`dd()`-artigen Ausgaben und kennst Xdebug als Werkzeug.

## Aufgaben

1. Lies [Fehler – Grundlagen](https://www.php.net/manual/de/language.errors.basics.php) und [Exceptions](https://www.php.net/manual/de/language.exceptions.php).
2. Lies die Odin-Lektion [„Debugging“](https://www.theodinproject.com/lessons/foundations-debugging) – sie nutzt JavaScript, die Prinzipien sind aber sprachunabhängig.
3. Stelle in deiner Entwicklungsumgebung sicher, dass Fehler angezeigt werden: `php -i | grep -E "display_errors|error_reporting"`. Lokal: `display_errors = On`, `error_reporting = E_ALL`. **Auf einem Live-Server niemals Fehler anzeigen** (Sicherheitsrisiko), sondern loggen.
4. Optional, aber sehr empfehlenswert: Richte [Xdebug](https://xdebug.org/docs/install) mit deinem Editor ein und setze einen Breakpoint. Herd bringt Xdebug-Unterstützung mit.
5. Baue absichtlich 5 verschiedene Fehler in ein Skript ein (Tippfehler im Variablennamen, fehlendes Semikolon, falscher Typ bei `strict_types`, Division durch 0, Aufruf einer nicht existierenden Funktion). Lies jede Meldung genau und notiere, was sie dir sagt.

## Der Debugging-Ablauf

1. **Fehlermeldung komplett lesen** – wirklich, bis zum Ende.
2. **Reproduzieren** – tritt der Fehler zuverlässig auf?
3. **Eingrenzen** – ab welcher Zeile stimmt der Zustand nicht mehr? (`var_dump` oder Breakpoint)
4. **Hypothese bilden und prüfen** – eine Änderung auf einmal.
5. **Suchen** – Fehlermeldung (ohne deine Dateinamen) in die Suchmaschine.

## Wissensüberprüfung

- Was ist ein Stack Trace und in welcher Richtung liest du ihn?
- Wann fängst du eine Exception – und wann lässt du sie bewusst durch?
- Warum solltest du `catch (Exception $e) {}` mit leerem Block nie schreiben?
- Wofür ist `finally` gut?
