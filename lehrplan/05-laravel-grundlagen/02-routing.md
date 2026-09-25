# Routing

## Einführung

Routen verbinden URLs mit Code. In Laravel stehen sie in `routes/web.php` – das ist der Router, den du in Modul 3 selbst gebaut hast, nur deutlich mächtiger.

## Lernziele

- Du kannst Routen für alle HTTP-Methoden definieren.
- Du kennst Routen-Parameter (Pflicht, optional, mit Einschränkungen).
- Du verwendest **benannte Routen** und die `route()`-Hilfsfunktion statt fest codierter URLs.
- Du kannst Routen gruppieren (Prefix, Middleware).
- Du kennst `php artisan route:list`.

## Aufgaben

1. Lies [Routing](https://laravel.com/docs/routing) bis einschließlich „Route Groups“ sowie „Route Model Binding“ (Letzteres ergibt nach Lektion 5 mehr Sinn – lies es dann noch einmal).
2. Lege Routen an für: `/` (Startseite), `/ueber-uns`, `/wachen/{nummer}` (nur Ziffern erlaubt) und eine Gruppe `/admin/...`.
3. Gib alle Routen mit `php artisan route:list` aus.

## Wissensüberprüfung

- Warum sind benannte Routen besser als fest eingetragene URLs?
- Wie schränkst du einen Parameter auf Zahlen ein?
- Was macht `Route::view()`, was `Route::redirect()`?
