# Controller & Request-Lebenszyklus

## Einführung

Controller bündeln die Logik zu zusammengehörigen Routen. Laravel folgt dabei gern der **Resource-Konvention**: Sieben Standard-Aktionen (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`) decken das komplette CRUD einer Ressource ab.

## Lernziele

- Du kannst Controller mit Artisan erzeugen und Routen darauf zeigen lassen.
- Du kennst Resource-Controller und `Route::resource()`.
- Du kannst auf den Request zugreifen (`Request $request`, `$request->input()`).
- Du verstehst grob den Request-Lebenszyklus und die Rolle von **Middleware**.
- Du verstehst, wie Laravel per **Service Container** Abhängigkeiten automatisch injiziert (Dependency Injection aus Modul 2!).

## Aufgaben

1. Lies [Controllers](https://laravel.com/docs/controllers), [Requests](https://laravel.com/docs/requests) (bis „Files“), [Responses](https://laravel.com/docs/responses) (bis „Redirects“).
2. Lies [Request Lifecycle](https://laravel.com/docs/lifecycle) und [Middleware](https://laravel.com/docs/middleware) (bis „Middleware Parameters“).
3. Lies [Service Container](https://laravel.com/docs/container) bis „Binding“. Es ist in Ordnung, wenn nicht alles sofort klickt – komm später wieder.
4. Erzeuge `php artisan make:controller FahrzeugController --resource` und verbinde ihn mit `Route::resource('fahrzeuge', FahrzeugController::class)`. Lass jede Methode vorerst nur einen Text zurückgeben und rufe alle Routen im Browser auf.

## Wissensüberprüfung

- Welche sieben Methoden hat ein Resource-Controller, und welche HTTP-Methode + URL gehört jeweils dazu?
- Was ist Middleware? Nenne zwei Beispiele.
- Wie kommt die `Request`-Instanz in deine Controller-Methode, obwohl du sie nie erzeugst?
