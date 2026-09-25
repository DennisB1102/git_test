# 06 – Array-Statistik

Schreibe `statistik(array $zahlen): array`, die für eine Liste von Zahlen folgendes zurückgibt:

```php
['min' => …, 'max' => …, 'durchschnitt' => …, 'median' => …]
```

- `durchschnitt` und `median` als `float`, auf 2 Nachkommastellen gerundet
- Bei einer **leeren** Liste wirf eine `InvalidArgumentException`
- Median: bei gerader Anzahl der Mittelwert der beiden mittleren Werte

Anwendungsidee: Stell dir vor, `$zahlen` sind Hilfsfristen in Minuten aus einer Einsatzstatistik.

**Hinweise:** `min()`, `max()`, `array_sum()`, `sort()`, `intdiv()`.
