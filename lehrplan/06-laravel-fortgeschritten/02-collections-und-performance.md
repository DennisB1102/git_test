# Collections & Query-Performance

## Einführung

Eloquent liefert **Collections** – Arrays mit Superkräften (`map`, `filter`, `groupBy`, `sum` …). Die häufigste Performance-Falle in Laravel ist das **N+1-Problem**: Eine Liste mit 50 Einträgen erzeugt 51 Datenbankabfragen, weil für jeden Eintrag die Beziehung einzeln nachgeladen wird. Die Lösung heißt **Eager Loading**.

## Lernziele

- Du beherrschst die wichtigsten Collection-Methoden.
- Du erkennst und behebst N+1-Probleme mit `with()`.
- Du kannst Lazy Loading im Entwicklungsmodus verbieten, um N+1 früh zu bemerken.
- Du weißt, wann du Datenbank-Aggregation statt Collection-Methoden nutzen solltest.
- Du kennst Caching in Grundzügen.

## Aufgaben

1. Lies [Collections](https://laravel.com/docs/collections) – Einführung und die Methodenliste überfliegen.
2. Lies in [Eloquent: Relationships](https://laravel.com/docs/eloquent-relationships#eager-loading) den Abschnitt „Eager Loading“ inkl. „Preventing Lazy Loading“.
3. Lies [Cache](https://laravel.com/docs/cache) bis „Retrieving Items From the Cache“ inkl. `remember`.
4. Erzeuge eine Übersichtsseite, die 50 Fahrzeuge mit ihrer Wache anzeigt. Zähle die Abfragen mit Debugbar/Telescope – mit und ohne `with('wache')`.
5. Überlege: Warum ist `Fortbildung::all()->sum('stunden')` schlechter als `Fortbildung::sum('stunden')`?

## Wissensüberprüfung

- Was ist das N+1-Problem? Wie erkennst und behebst du es?
- Was macht `Model::preventLazyLoading()`?
- Nenne drei Collection-Methoden und was sie tun.
