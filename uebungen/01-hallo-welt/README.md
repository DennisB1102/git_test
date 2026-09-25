# 01 – Hallo Welt

Schreibe die Funktion `gruss(string $name = ''): string`.

- `gruss('Dennis')` → `'Hallo, Dennis!'`
- `gruss()` oder `gruss('')` → `'Hallo, Welt!'`
- Leerzeichen am Anfang/Ende des Namens sollen ignoriert werden: `gruss('  Anna ')` → `'Hallo, Anna!'`

**Hinweise:** String-Interpolation mit doppelten Anführungszeichen, `trim()`, Standardwerte für Parameter.

```bash
php uebungen/pruefen.php 01-hallo-welt
```
