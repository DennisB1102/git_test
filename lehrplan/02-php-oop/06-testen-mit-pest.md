# Automatisiert testen mit Pest

## Einführung

Du kennst jetzt den Mini-Testrunner aus `uebungen/`. Professionelle PHP-Projekte nutzen **PHPUnit** oder **Pest** (baut auf PHPUnit auf, mit schlankerer Syntax). Neue Laravel-Projekte bieten Pest standardmäßig an.

Tests sind wie ein Fahrzeugcheck vor Schichtbeginn: lästig, bis sie einmal etwas finden. Und sie geben dir den Mut, Code umzubauen, ohne Angst, etwas kaputtzumachen.

## Lernziele

- Du kannst Pest in einem Composer-Projekt installieren und Tests ausführen.
- Du kannst Tests nach dem Muster *Arrange – Act – Assert* schreiben.
- Du kennst `expect()`-Assertions, Datasets und das Testen von Exceptions.
- Du hast Test-Driven Development (TDD) einmal ausprobiert.

## Aufgaben

1. Lies die [Pest-Dokumentation](https://pestphp.com/docs/installation): *Installation*, *Writing Tests*, *Expectations*, *Datasets*, *Exceptions*.
2. Installiere Pest in deinem Projekt aus der vorherigen Lektion und schreibe Tests für deine `Fahrzeug`-Klasse.
3. **Portiere eine Übung:** Übertrage die Tests von `uebungen/08-bankkonto/tests.php` in Pest-Tests. Vergleiche.
4. **TDD ausprobieren:** Schreibe für eine neue Funktion `schockIndex(int $puls, int $systole): float` **zuerst** die Tests (inkl. Division durch 0!), sieh sie scheitern, dann implementiere. Rot → Grün → Refactor.

## Wissensüberprüfung

- Was bedeutet Arrange – Act – Assert?
- Was ist ein Dataset in Pest und wofür ist es gut?
- Was sind die drei Schritte im TDD-Zyklus?
- Was ist der Unterschied zwischen Unit-Tests und Feature-Tests?

## Zusätzliche Ressourcen

- [PHPUnit-Dokumentation](https://docs.phpunit.de/)
