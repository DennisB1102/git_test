# 07 – Glasgow Coma Scale

Kennst du aus dem Job – jetzt in Code. Schreibe zwei Funktionen:

1. `gcs(int $augen, int $verbal, int $motorik): int`
   - Gültige Bereiche: Augen 1–4, Verbal 1–5, Motorik 1–6
   - Liegt ein Wert außerhalb, wirf eine `InvalidArgumentException` mit aussagekräftiger Meldung (welcher Wert ist falsch?)
   - Rückgabe: die Summe (3–15)

2. `gcsSchweregrad(int $summe): string`
   - 13–15 → `'leicht'`, 9–12 → `'mittelschwer'`, 3–8 → `'schwer'` (übliche SHT-Einteilung)
   - Außerhalb von 3–15 → `InvalidArgumentException`

**Lernziel:** Eingaben validieren und Fehler mit Exceptions signalisieren, statt stillschweigend falsche Werte zurückzugeben. Probier `match(true)` aus.

> ⚠️ Reine Programmierübung – kein Werkzeug für die Patientenversorgung.
