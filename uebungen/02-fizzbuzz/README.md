# 02 – FizzBuzz

Der Klassiker. Schreibe `fizzbuzz(int $bis): array`, die ein Array mit den Einträgen von 1 bis `$bis` liefert:

- durch 3 teilbar → `'Fizz'`
- durch 5 teilbar → `'Buzz'`
- durch 3 **und** 5 teilbar → `'FizzBuzz'`
- sonst die Zahl selbst **als String** (`'1'`, `'2'`, …)

`fizzbuzz(0)` liefert ein leeres Array.

**Hinweise:** `for`-Schleife, Modulo-Operator `%`, `if/elseif` – und überlege, in welcher Reihenfolge du prüfen musst.
