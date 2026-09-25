# Prinzipien für guten Code

## Einführung

Code wird viel öfter gelesen als geschrieben – vor allem von dir selbst, drei Monate später. Es gibt bewährte Prinzipien, die helfen, verständlichen und änderbaren Code zu schreiben. Sie sind **Faustregeln, keine Gesetze**: Wer sie dogmatisch anwendet, erzeugt oft unnötig komplizierten Code.

## Lernziele

- Du kennst DRY, KISS und YAGNI.
- Du kannst die SOLID-Prinzipien in eigenen Worten erklären – besonders Single Responsibility und Dependency Inversion.
- Du kennst den PHP-Codestil PER-CS und kannst ihn automatisch anwenden.
- Du kennst ein paar Design Patterns vom Namen her (Strategy, Factory, Repository).

## Aufgaben

1. Lies die Odin-Lektion [„SOLID Principles“](https://www.theodinproject.com/lessons/node-path-javascript-solid-principles) (JavaScript-Beispiele, Prinzipien identisch).
2. Lies auf [Refactoring.Guru (deutsch)](https://refactoring.guru/de/design-patterns) die Seiten zu *Strategy* und *Factory Method*. Beispiele gibt es auch in PHP.
3. Lies den [PER Coding Style](https://www.php-fig.org/per/coding-style/) – überfliegen genügt.
4. Installiere [Laravel Pint](https://laravel.com/docs/pint) (funktioniert auch ohne Laravel) oder PHP-CS-Fixer in einem deiner Projekte und lass es laufen: `composer require laravel/pint --dev && vendor/bin/pint`
5. Nimm dein Einsatz-Logbuch aus Modul 1 und finde drei Stellen, die gegen eines der Prinzipien verstoßen.

## Wissensüberprüfung

- Was bedeutet das Single-Responsibility-Prinzip?
- Was bedeutet YAGNI – und warum ist es für Anfänger:innen besonders wichtig?
- Warum lässt man den Codestil von einem Werkzeug statt von Hand prüfen?
