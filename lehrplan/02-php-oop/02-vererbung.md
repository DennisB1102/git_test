# Vererbung & abstrakte Klassen

## Einführung

Mit Vererbung übernimmt eine Klasse Eigenschaften und Methoden einer anderen: `Rettungswagen extends Fahrzeug`. Das spart Code – wird aber oft übertrieben. Eine bewährte Faustregel lautet: **„Composition over Inheritance“** – lieber Objekte zusammensetzen als tiefe Vererbungshierarchien bauen.

## Lernziele

- Du kannst Klassen erweitern und Methoden überschreiben.
- Du kennst `parent::`, `protected` und `final`.
- Du verstehst abstrakte Klassen und abstrakte Methoden.
- Du kannst begründen, wann Vererbung sinnvoll ist („ist ein“) und wann Komposition („hat ein“).

## Aufgaben

1. Lies [Vererbung](https://www.php.net/manual/de/language.oop5.inheritance.php), [Abstrakte Klassen](https://www.php.net/manual/de/language.oop5.abstract.php) und [Das final-Schlüsselwort](https://www.php.net/manual/de/language.oop5.final.php).
2. Modelliere: `Fahrzeug` (abstrakt, mit `kennung`, `kilometerstand`, abstrakter Methode `besatzungsstaerke(): int`) und die Unterklassen `Rtw`, `Ktw`, `Nef`. Schreibe ein Skript, das eine gemischte Liste von Fahrzeugen durchläuft und die Gesamtbesatzung ausgibt.
3. Überlege: Sollte ein `Nef` von `Pkw` erben? Was passiert, wenn später ein NEF als Kompaktbus kommt? Schreibe deine Überlegung als Kommentar in den Code.

## Wissensüberprüfung

- Was ist der Unterschied zwischen `private` und `protected` bei Vererbung?
- Kann man eine abstrakte Klasse instanziieren?
- Was bedeutet „Composition over Inheritance“? Nenne ein Beispiel.
