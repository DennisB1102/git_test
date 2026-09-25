# 10 – Sichtung beim MANV (Enums & Sortieren)

Beim Massenanfall von Verletzten werden Patienten Sichtungskategorien zugeordnet. Modelliere das:

1. **Enum** `Sichtungskategorie: int` mit den Fällen `SK1 = 1`, `SK2 = 2`, `SK3 = 3`, `SK4 = 4` und der Methode `farbe(): string`
   → `'rot'`, `'gelb'`, `'grün'`, `'blau'`
2. **Klasse** `Patient` mit `readonly`-Eigenschaften `kennung` (string), `kategorie` (Sichtungskategorie), `gesichtetUm` (`DateTimeImmutable`) – alle public, per Konstruktor-Promotion
3. **Klasse** `Sichtungsliste`
   - `hinzufuegen(Patient $p): void` – doppelte Kennung → `InvalidArgumentException`
   - `sortiert(): array` – nach Kategorie aufsteigend (SK1 zuerst), innerhalb einer Kategorie nach Sichtungszeit (früher zuerst)
   - `anzahlJeKategorie(): array` – z. B. `['SK1' => 2, 'SK2' => 0, 'SK3' => 5, 'SK4' => 0]` (alle Kategorien immer enthalten)
   - `umsichten(string $kennung, Sichtungskategorie $neu): void` – ersetzt den Patienten durch eine Kopie mit neuer Kategorie (readonly!). Unbekannte Kennung → `OutOfBoundsException`

**Lernziele:** Backed Enums, Methoden auf Enums, `readonly`, `usort()` mit dem Spaceship-Operator `<=>`, `DateTimeImmutable`.

> ⚠️ Stark vereinfachte Programmierübung – bildet kein reales Sichtungsverfahren (z. B. mSTaRT) ab.
