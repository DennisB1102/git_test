# Mails, Notifications & Queues

## Einführung

E-Mails verschicken dauert – der Benutzer soll nicht warten. **Queues** verschieben langsame Aufgaben in den Hintergrund, wo ein **Worker** sie abarbeitet. **Notifications** sind Laravels einheitlicher Weg, Benutzer über verschiedene Kanäle (Mail, Datenbank, Slack …) zu benachrichtigen.

## Lernziele

- Du kannst Mailables schreiben und Mails lokal abfangen (Log-Treiber oder ein lokales Mail-Tool wie Mailpit, das z. B. bei Herd dabei ist).
- Du kannst Notifications über Mail und Datenbank versenden.
- Du kannst Jobs erstellen, in die Queue stellen und mit `queue:work` abarbeiten.
- Du verstehst, was bei fehlgeschlagenen Jobs passiert.

## Aufgaben

1. Lies [Mail](https://laravel.com/docs/mail) bis „Queueing Mail“, [Notifications](https://laravel.com/docs/notifications) (Mail und Database) und [Queues](https://laravel.com/docs/queues) bis „Running the Queue Worker“ inkl. „Dealing With Failed Jobs“.
2. Schicke im Fortbildungs-Tracker nach der Registrierung eine Willkommens-Mail – über die Queue.
3. Speichere eine Datenbank-Notification, wenn ein Benutzer sein Jahresziel erreicht, und zeige ungelesene Notifications in der Navigation an.

## Wissensüberprüfung

- Warum verschickt man Mails über eine Queue?
- Was passiert mit einem Job, wenn der Worker nicht läuft?
- Was ist der Unterschied zwischen einer Mailable und einer Notification?
