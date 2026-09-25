# 05 – Wörter zählen

Schreibe `woerterZaehlen(string $text): array`. Rückgabe ist ein assoziatives Array `wort => anzahl`:

- Wörter werden kleingeschrieben
- Satzzeichen zählen nicht zum Wort
- Sortiert nach Häufigkeit (absteigend), bei Gleichstand alphabetisch

```php
woerterZaehlen('Der Hund, der Hund und die Katze.');
// ['der' => 2, 'hund' => 2, 'die' => 1, 'katze' => 1, 'und' => 1]
```

**Hinweise:** `preg_split()` oder `preg_match_all()`, `array_count_values()`, `uksort()` bzw. `uasort()` – oder `arsort()` plus Nachdenken über Stabilität.
