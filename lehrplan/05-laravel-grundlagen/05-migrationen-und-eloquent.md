# Migrationen & Eloquent

## Einführung

**Migrationen** sind Versionskontrolle für dein Datenbankschema: PHP-Dateien, die Tabellen anlegen oder ändern – nachvollziehbar und auf jedem Rechner reproduzierbar. **Eloquent** ist Laravels ORM: Jede Tabelle wird durch eine Model-Klasse repräsentiert, jede Zeile durch ein Objekt.

**Factories** erzeugen Testdaten, **Seeder** füllen die Datenbank damit.

## Lernziele

- Du kannst Migrationen erstellen, ausführen und zurückrollen.
- Du kannst Models anlegen und CRUD-Operationen mit Eloquent ausführen.
- Du kennst `$fillable` bzw. Mass-Assignment-Schutz und weißt, warum es ihn gibt.
- Du kennst **Casts** (z. B. Datum, Enum, Boolean).
- Du kannst Factories und Seeder schreiben.
- Du nutzt **Route Model Binding**.

## Aufgaben

1. Lies [Database: Migrations](https://laravel.com/docs/migrations) (bis „Indexes“, inkl. „Foreign Key Constraints“).
2. Lies [Eloquent: Getting Started](https://laravel.com/docs/eloquent) (bis „Deleting Models“, inkl. „Mass Assignment“).
3. Lies [Eloquent: Mutators & Casting](https://laravel.com/docs/eloquent-mutators) – Abschnitt „Attribute Casting“ inkl. „Enum Casting“.
4. Lies [Eloquent: Factories](https://laravel.com/docs/eloquent-factories) und [Database: Seeding](https://laravel.com/docs/seeding).
5. Lies noch einmal „Route Model Binding“ in [Routing](https://laravel.com/docs/routing#route-model-binding).
6. **Praxis:** Erzeuge alles auf einmal mit `php artisan make:model Fahrzeug -mfsc --resource` (Was bedeuten die Flags? → `php artisan make:model --help`). Spalten: kennung, typ (Enum-Cast auf ein PHP-Enum!), kilometerstand, in_dienst (bool). Befülle per Seeder mit 20 Fahrzeugen und zeige sie in der `index`-Methode an.

## Wissensüberprüfung

- Was ist der Vorteil von Migrationen gegenüber einer `schema.sql`?
- Was passiert bei `php artisan migrate:fresh --seed`? Warum darfst du das nie auf dem Live-Server ausführen?
- Was ist eine Mass-Assignment-Lücke?
- Was macht Route Model Binding, und was passiert bei einer nicht existierenden ID?
