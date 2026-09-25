# 08 – Bankkonto (OOP)

Deine erste Klasse. Implementiere `Konto`:

- `__construct(string $inhaber, int $kontostandInCent = 0)` – negativer Startwert → `InvalidArgumentException`
- `inhaber(): string`
- `kontostand(): int` (in Cent!)
- `einzahlen(int $cent): void` – Betrag muss > 0 sein, sonst `InvalidArgumentException`
- `abheben(int $cent): void` – Betrag muss > 0 sein; reicht das Guthaben nicht, wirf eine **eigene** `DeckungFehltException` (erbt von `RuntimeException`)
- `ueberweisen(Konto $ziel, int $cent): void` – schlägt das Abheben fehl, darf sich **keines** der beiden Konten ändern

**Warum Cent als `int`?** Geld nie als `float` speichern – siehe Übung 03 und die Rundungsfehler.

**Lernziele:** Kapselung (`private`), Konstruktor-Promotion, eigene Exception-Klassen, Objekte als Parameter.
