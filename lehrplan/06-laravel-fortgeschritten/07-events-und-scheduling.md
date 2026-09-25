# Events & Task Scheduling

## Einführung

**Events** entkoppeln Code: „Fortbildung wurde angelegt“ ist ein Ereignis, auf das beliebig viele **Listener** reagieren können, ohne dass der Controller sie kennen muss. Der **Scheduler** führt Aufgaben zeitgesteuert aus – z. B. jeden Morgen um 7 Uhr eine Erinnerung.

## Lernziele

- Du kannst Events und Listener erstellen und verbinden.
- Du kennst Model-Events und Observer.
- Du kannst Aufgaben im Scheduler planen und lokal testen (`schedule:work`, `schedule:list`).
- Du kannst abwägen, wann Events Code klarer machen – und wann sie ihn schwerer nachvollziehbar machen.

## Aufgaben

1. Lies [Events](https://laravel.com/docs/events) bis „Queued Event Listeners“ und in [Eloquent](https://laravel.com/docs/eloquent#events) den Abschnitt „Events“ inkl. „Observers“.
2. Lies [Task Scheduling](https://laravel.com/docs/scheduling) bis „Running the Scheduler“.
3. Baue einen geplanten Befehl, der am 1. Oktober jedes Jahres allen Benutzern, die ihr Jahresziel noch nicht erreicht haben, eine Erinnerung schickt.

## Wissensüberprüfung

- Wie läuft der Scheduler auf einem Server (was muss eingerichtet werden)?
- Was ist ein Observer?
- Nenne einen Nachteil von zu vielen Events.
