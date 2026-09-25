# Laravel installieren & verstehen

## Einführung

Laravel ist das populärste PHP-Framework. Es gibt dir eine durchdachte Struktur und fertige Lösungen für wiederkehrende Aufgaben (Routing, Datenbank, Auth, Mails, Queues …), damit du dich auf die eigentliche Anwendung konzentrieren kannst. Alles, was du in Modul 3 und 4 mühsam gebaut hast, gibt es hier in ausgereift.

## Lernziele

- Du kannst ein neues Laravel-Projekt anlegen und starten.
- Du kennst die Ordnerstruktur und weißt, wo was hingehört.
- Du verstehst die `.env`-Datei und die Konfiguration in `config/`.
- Du weißt, warum `.env` **niemals** ins Git gehört.

## Aufgaben

1. Lies in der Doku [Installation](https://laravel.com/docs/installation) und lege ein Projekt an:
   ```bash
   laravel new wache-test     # Starter Kit: none, Testing: Pest, Datenbank: SQLite
   cd wache-test
   composer run dev           # bzw. php artisan serve – siehe Doku
   ```
2. Lies [Configuration](https://laravel.com/docs/configuration) und [Directory Structure](https://laravel.com/docs/structure).
3. Öffne jeden Ordner der Projektstruktur einmal und schreibe dir in eigenen Worten eine Zeile dazu auf, wofür er da ist. Vergleiche mit deinem Mini-MVC aus Modul 3: Wo ist der Front Controller? Wo die Views?
4. Prüfe die `.gitignore`: Welche Dateien werden ausgeschlossen, und warum?

## Wissensüberprüfung

- Welche Rolle hat `public/index.php`?
- Wo liegen Controller, Models, Views, Routen und Migrationen?
- Wozu dient `.env`, und warum gibt es zusätzlich `.env.example`?
- Was ist der `APP_KEY` und wofür wird er verwendet?
