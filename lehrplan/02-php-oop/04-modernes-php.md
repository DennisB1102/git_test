# Modernes PHP: Enums, readonly & Co.

## Einführung

PHP hat sich seit Version 7 enorm entwickelt. Viele Tutorials im Netz zeigen noch PHP-5-Stil – lerne gleich die moderne Variante. Seit PHP 8 sind u. a. dazugekommen: `match`, benannte Argumente, Constructor Promotion, Nullsafe-Operator, Enums, `readonly`, First-Class-Callable-Syntax, Property Hooks (8.4) und mehr.

## Lernziele

- Du kannst Enums (pure und backed) mit Methoden einsetzen.
- Du verstehst `readonly`-Eigenschaften und -Klassen und das Konzept unveränderlicher Objekte.
- Du kennst den Nullsafe-Operator `?->`, Union Types und `never`.
- Du erkennst veralteten PHP-Stil in Tutorials.

## Aufgaben

1. Lies [Aufzählungen (Enums)](https://www.php.net/manual/de/language.enumerations.php) – alle Unterseiten.
2. Lies zu [readonly-Eigenschaften](https://www.php.net/manual/de/language.oop5.properties.php#language.oop5.properties.readonly-properties).
3. Stöbere in den Release-Seiten auf php.net (z. B. [php.net/releases/8.4](https://www.php.net/releases/8.4/de.php)) und in den Seiten der älteren 8.x-Versionen. Notiere dir 3 Features, die du nützlich findest.
4. Lies [PHP The Right Way](https://phptherightway.com/) – mindestens die Abschnitte *Code Style Guide* und *Language Highlights*.

## Übung

`uebungen/10-sichtung`

## Wissensüberprüfung

- Was ist der Vorteil eines Enums gegenüber String-Konstanten wie `'rot'`, `'gelb'`?
- Was ist der Unterschied zwischen einem „pure“ und einem „backed“ Enum?
- Wie „änderst“ du ein unveränderliches (immutable) Objekt?
- Was macht `$patient?->adresse?->ort`?
