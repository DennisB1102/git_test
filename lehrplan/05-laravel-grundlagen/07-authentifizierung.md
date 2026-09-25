# Authentifizierung

## Einführung

Registrierung, Login, Logout, „Passwort vergessen“, E-Mail-Bestätigung – das selbst sicher zu bauen, ist aufwendig und fehleranfällig. Laravel bietet dafür **Starter Kits**, die all das fertig mitbringen. Du baust Auth nicht mehr selbst, aber du solltest verstehen, was im Hintergrund passiert.

## Lernziele

- Du kannst ein Projekt mit einem Starter Kit anlegen.
- Du kannst Routen mit der `auth`-Middleware schützen.
- Du kannst auf den eingeloggten Benutzer zugreifen (`auth()->user()`, `$request->user()`).
- Du verstehst, welche Teile der Auth das Starter Kit generiert hat und wo sie liegen.

## Aufgaben

1. Lies [Starter Kits](https://laravel.com/docs/starter-kits). Laravel bietet mehrere Varianten (z. B. mit Livewire, React oder Vue). **Empfehlung für dich: die Livewire-Variante** – sie bleibt nah an Blade und PHP.
2. Lies [Authentication](https://laravel.com/docs/authentication) bis einschließlich „Protecting Routes“.
3. Lege ein neues Projekt mit Starter Kit an, registriere dich, logge dich ein und aus. Suche anschließend im Code: Wo werden Login-Routen definiert? Wo wird das Passwort gehasht? Wo wird die Session regeneriert?
4. Lies [Hashing](https://laravel.com/docs/hashing) und vergleiche mit `password_hash` aus Modul 3.

## Wissensüberprüfung

- Was macht die `auth`-Middleware, wenn ein nicht eingeloggter Benutzer die Route aufruft?
- Was ist der Unterschied zwischen *Authentifizierung* und *Autorisierung*? (Letztere kommt in Modul 6.)
- Welche Middleware gibt es für E-Mail-Bestätigung?
