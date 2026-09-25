# 09 – Stapel & Warteschlange (Interfaces)

Implementiere das vorgegebene Interface `Sammlung` zweimal:

- `Stapel` – **LIFO** (last in, first out), wie ein Tablettstapel
- `Warteschlange` – **FIFO** (first in, first out), wie die Schlange in der Notaufnahme (ohne Triage 😉)

Beide müssen außerdem `Countable` implementieren, damit `count($stapel)` funktioniert.

`entnehmen()` und `oben()` auf einer leeren Sammlung werfen eine `UnderflowException`.

**Lernziele:** Interfaces, eingebaute PHP-Interfaces (`Countable`), Polymorphie – derselbe Code kann mit beiden Klassen arbeiten.
