# Klassen & Objekte

## Einführung

Eine **Klasse** ist ein Bauplan, ein **Objekt** ein konkretes Exemplar davon. Die Klasse `Rettungswagen` beschreibt, was ein RTW hat (Kennung, Kilometerstand) und kann (ausrücken, einrücken); `$rtw1` ist ein konkretes Fahrzeug.

Der Kern von OOP ist **Kapselung**: Ein Objekt schützt seinen Zustand und erlaubt Änderungen nur über definierte Methoden. So kann der Kontostand eines Kontos nie „aus Versehen“ negativ werden.

## Lernziele

- Du kannst Klassen mit Eigenschaften, Methoden und Konstruktor schreiben.
- Du kennst die Sichtbarkeiten `public`, `protected`, `private` und setzt sie bewusst ein.
- Du kennst Constructor Property Promotion.
- Du verstehst `$this`, `static`, `self` und statische Methoden (und warum man sie sparsam einsetzt).
- Du weißt, dass Objekte per Handle übergeben werden (kein Kopieren!).

## Aufgaben

1. Lies im Handbuch [Klassen und Objekte – Einführung](https://www.php.net/manual/de/oop5.intro.php), dann [Grundlagen](https://www.php.net/manual/de/language.oop5.basic.php), [Eigenschaften](https://www.php.net/manual/de/language.oop5.properties.php), [Konstruktoren](https://www.php.net/manual/de/language.oop5.decon.php), [Sichtbarkeit](https://www.php.net/manual/de/language.oop5.visibility.php), [Statische Schlüsselwörter](https://www.php.net/manual/de/language.oop5.static.php).
2. Lies [Objekte und Referenzen](https://www.php.net/manual/de/language.oop5.references.php) und [Objekte klonen](https://www.php.net/manual/de/language.oop5.cloning.php).
3. Lies in [PHP The Right Way](https://phptherightway.com/#object-oriented-programming) den Abschnitt zur objektorientierten Programmierung.

## Übung

`uebungen/08-bankkonto`

## Wissensüberprüfung

- Warum sollten Eigenschaften meist `private` sein?
- Was passiert, wenn du `$b = $a;` schreibst und `$a` ein Objekt ist? Wie bekommst du eine echte Kopie?
- Was ist Constructor Property Promotion?
- Wann ist eine statische Methode sinnvoll?
