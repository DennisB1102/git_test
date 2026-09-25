# 04 – Palindrom

Schreibe `istPalindrom(string $text): bool`. Ein Palindrom liest sich vorwärts wie rückwärts.

- Groß-/Kleinschreibung ignorieren
- Leerzeichen und Satzzeichen ignorieren
- Umlaute müssen korrekt funktionieren (`'Ötö'` ist ein Palindrom)
- Ein leerer String gilt als Palindrom

**Hinweise:** `strrev()` funktioniert **nicht** mit Umlauten (warum? → UTF-8 und Bytes). Schau dir `mb_strtolower()`, `mb_str_split()` und `preg_replace()` mit dem `u`-Modifier an.
