# Front Controller & MVC

## Einführung

Bisher war jede Seite eine eigene PHP-Datei. Moderne Anwendungen leiten **alle** Requests durch eine einzige Datei (`public/index.php`, der *Front Controller*), die anhand der URL entscheidet, welcher Code ausgeführt wird (*Routing*). Der Code wird aufgeteilt in **M**odel (Daten & Logik), **V**iew (Darstellung) und **C**ontroller (vermittelt dazwischen).

Genau so ist Laravel aufgebaut. Du baust hier eine Mini-Version, um das Prinzip zu verstehen – **nicht** um ein eigenes Framework zu entwickeln.

## Lernziele

- Du verstehst das Front-Controller-Muster.
- Du kannst einen einfachen Router bauen (Methode + Pfad → Funktion).
- Du kannst MVC in eigenen Worten erklären.
- Du verstehst, warum nur der `public/`-Ordner vom Webserver erreichbar sein darf.

## Aufgaben

1. Schau dir die Laracasts-Serie „PHP for Beginners“ ab dem Abschnitt zum Routing an – dort wird genau das Schritt für Schritt aufgebaut. Alternativ: Lies [„Model View Controller“ auf Wikipedia](https://de.wikipedia.org/wiki/Model_View_Controller).
2. Baue einen Mini-Router: `public/index.php` liest `$_SERVER['REQUEST_METHOD']` und `parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)` und ruft den passenden Controller auf. Unbekannte Routen → 404-Seite.
   ```bash
   php -S localhost:8000 -t public
   ```
3. Lagere HTML in View-Dateien aus (`views/startseite.php`) und schreibe eine Funktion `view(string $name, array $daten = [])`.

## Wissensüberprüfung

- Was ist ein Front Controller?
- Was gehört in ein Model, was in einen Controller, was in eine View?
- Warum liegen Konfigurationsdateien (mit Passwörtern) außerhalb von `public/`?
