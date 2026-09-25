# 03 – Temperatur umrechnen

Schreibe zwei Funktionen, die jeweils auf **eine Nachkommastelle** runden:

- `celsiusZuFahrenheit(float $c): float` – Formel: `F = C × 9/5 + 32`
- `fahrenheitZuCelsius(float $f): float` – Formel: `C = (F − 32) × 5/9`

Beispiel: `celsiusZuFahrenheit(37.0)` → `98.6`

**Hinweise:** `round()`, Operator-Rangfolge (Klammern!). Warum ist `0.1 + 0.2 === 0.3` in PHP `false`? Lies nach: [Gleitkommazahlen im PHP-Handbuch](https://www.php.net/manual/de/language.types.float.php).
