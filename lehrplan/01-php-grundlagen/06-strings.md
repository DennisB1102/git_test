# Strings & reguläre Ausdrücke

## Einführung

Texte verarbeiten: Benutzereingaben säubern, formatieren, durchsuchen. Achtung bei Umlauten: PHPs klassische String-Funktionen arbeiten mit **Bytes**, nicht mit Zeichen. Ein `ä` besteht in UTF-8 aus zwei Bytes. Deshalb gibt es die `mb_*`-Funktionen (Multibyte).

## Lernziele

- Du kennst einfache vs. doppelte Anführungszeichen, Interpolation und Heredoc.
- Du kennst die wichtigsten String-Funktionen (`strlen`/`mb_strlen`, `str_contains`, `str_starts_with`, `str_replace`, `explode`, `implode`, `trim`, `sprintf`, `number_format`).
- Du verstehst, warum `strlen('Größe')` nicht 5 ergibt.
- Du kannst einfache reguläre Ausdrücke mit `preg_match` und `preg_replace` schreiben.

## Aufgaben

1. Lies [Strings](https://www.php.net/manual/de/language.types.string.php) (inkl. Heredoc/Nowdoc).
2. Überfliege die [String-Funktionen](https://www.php.net/manual/de/ref.strings.php) und die [Multibyte-Funktionen](https://www.php.net/manual/de/ref.mbstring.php).
3. Lies die [Einführung zu PCRE](https://www.php.net/manual/de/intro.pcre.php) und übe Regex interaktiv auf [regex101.com](https://regex101.com) (Flavor: PCRE2).
4. Schreibe eine Funktion, die prüft, ob ein String ein gültiges deutsches Kfz-Kennzeichen-Format hat (z. B. `B-RK 1234`). Sie muss nicht perfekt sein – überlege, wo die Grenzen von Regex liegen.

## Übungen

- `uebungen/04-palindrom`
- `uebungen/05-woerter-zaehlen`

## Wissensüberprüfung

- Warum liefert `strlen('Größe')` 7?
- Was ist der Unterschied zwischen `'Hallo $name'` und `"Hallo $name"`?
- Was macht `sprintf('%05.2f', 3.14159)`?
- Wofür steht der Modifier `u` in `/…/u`?
