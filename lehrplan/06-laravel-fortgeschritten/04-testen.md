# Testen in Laravel

## Einführung

Laravel ist hervorragend testbar. **Feature-Tests** simulieren HTTP-Requests gegen deine App und prüfen die Antwort. Mit `RefreshDatabase` bekommt jeder Test eine saubere Datenbank. Mit **Fakes** ersetzt du Mails, Queues, Storage und Events durch Attrappen, die du prüfen kannst.

## Lernziele

- Du schreibst Feature-Tests für Routen, inkl. Auth (`actingAs`).
- Du prüfst Datenbankzustände (`assertDatabaseHas`) und Responses (`assertOk`, `assertRedirect`, `assertForbidden`, `assertSessionHasErrors`, `assertSee`).
- Du nutzt Factories in Tests.
- Du kannst Mail, Notification, Queue und Storage faken.
- Du misst die Testabdeckung und bewertest sie kritisch.

## Aufgaben

1. Lies [Testing: Getting Started](https://laravel.com/docs/testing), [HTTP Tests](https://laravel.com/docs/http-tests), [Database Testing](https://laravel.com/docs/database-testing) und [Mocking](https://laravel.com/docs/mocking) (Abschnitte zu den Fakes).
2. Lies in der Pest-Doku die Abschnitte zu [Laravel-spezifischen Features](https://pestphp.com/docs/plugins) bzw. Architektur-Tests.
3. Bringe deinen Fortbildungs-Tracker auf mindestens 25 sinnvolle Tests. Für jeden Controller mindestens: Gast wird umgeleitet, Validierung greift, fremde Daten sind geschützt, Erfolgsfall funktioniert.
4. Richte die Coverage-Messung ein (`php artisan test --coverage`, benötigt Xdebug oder PCOV). Welche Teile sind ungetestet?

## Wissensüberprüfung

- Was macht das Trait bzw. die Pest-Funktion für `RefreshDatabase`?
- Wie testest du, dass eine Mail verschickt wurde, ohne dass sie wirklich verschickt wird?
- Ist 100 % Testabdeckung ein sinnvolles Ziel? Begründe.
