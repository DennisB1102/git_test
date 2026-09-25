# Eloquent-Beziehungen

## Einführung

Die Beziehungen aus Modul 4 (1:1, 1:n, n:m) bildet Eloquent mit Methoden im Model ab. Danach schreibst du `$wache->fahrzeuge` statt eines JOINs.

## Lernziele

- Du kannst `hasOne`, `belongsTo`, `hasMany`, `belongsToMany` definieren und nutzen.
- Du arbeitest mit Pivot-Tabellen inkl. Zusatzspalten (`withPivot`, `attach`, `sync`).
- Du kennst `hasManyThrough` und polymorphe Beziehungen vom Konzept her.
- Du kannst Beziehungen abfragen (`whereHas`, `withCount`).

## Aufgaben

1. Lies [Eloquent: Relationships](https://laravel.com/docs/eloquent-relationships) – „One to One“ bis „Many to Many“, dann „Querying Relations“, „Aggregating Related Models“ und „Inserting & Updating Related Models“. Polymorphe Beziehungen überfliegen.
2. Setze das ER-Diagramm aus Modul 4, Lektion 4 (Wache, Mitarbeitende, Qualifikation, Fortbildungen, Schichten, Fahrzeuge) in Migrationen und Models mit Beziehungen um.
3. Beantworte in Tinker:
   - Alle Mitarbeitenden einer Wache mit ihrer Qualifikation
   - Alle Mitarbeitenden, die an einer bestimmten Fortbildung teilgenommen haben
   - Wachen mit der Anzahl ihrer Fahrzeuge (`withCount`)

## Wissensüberprüfung

- Was ist der Unterschied zwischen `$wache->fahrzeuge` und `$wache->fahrzeuge()`?
- Welche Tabellen- und Spaltennamen erwartet Laravel standardmäßig für `belongsToMany`?
- Was ist der Unterschied zwischen `attach`, `detach` und `sync`?
