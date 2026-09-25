# Namespaces, Composer & Autoloading

## Einführung

Sobald ein Projekt mehr als eine Handvoll Dateien hat, brauchst du Ordnung: **Namespaces** verhindern Namenskonflikte (deine Klasse `Patient` vs. die `Patient`-Klasse eines Pakets), **Autoloading** lädt Klassen automatisch, und **Composer** verwaltet externe Pakete. Jedes Laravel-Projekt ist ein Composer-Projekt.

## Lernziele

- Du kannst Namespaces deklarieren und mit `use` importieren.
- Du verstehst den Autoloading-Standard PSR-4 (Namespace ↔ Ordnerstruktur).
- Du kannst ein Projekt mit `composer init` anlegen, Pakete installieren und den Autoloader nutzen.
- Du verstehst `composer.json` vs. `composer.lock` und weißt, welche Datei ins Git gehört (beide!) und welcher Ordner nicht (`vendor/`).
- Du kennst Semantic Versioning (`^1.2`, `~1.2`).

## Aufgaben

1. Lies [Namespaces – Übersicht](https://www.php.net/manual/de/language.namespaces.rationale.php) und die folgenden Unterseiten bis „Importieren“.
2. Lies [PSR-4: Autoloader](https://www.php-fig.org/psr/psr-4/) (kurz!).
3. Lies [Composer – Basic Usage](https://getcomposer.org/doc/01-basic-usage.md) komplett.
4. Lies [semver.org (deutsch)](https://semver.org/lang/de/).
5. **Praxis:** Lege ein neues Projekt an:
   ```bash
   mkdir namespace-test && cd namespace-test
   composer init          # Namespace z. B. "Dennis\\Wache\\", Ordner src/
   composer require nesbot/carbon
   ```
   Lege `src/Fahrzeug.php` im Namespace `Dennis\Wache` an, binde in `index.php` nur `vendor/autoload.php` ein und nutze sowohl deine Klasse als auch Carbon (die Datumsbibliothek, die Laravel intern nutzt).
6. Finde auf [Packagist](https://packagist.org) drei Pakete, die dich interessieren, und prüfe: Wann war der letzte Release? Wie viele Downloads? Gibt es offene Sicherheitsmeldungen? (Nicht jedes Paket ist vertrauenswürdig!)

## Wissensüberprüfung

- Welche Datei bindest du ein, damit Composer-Autoloading funktioniert?
- Warum gehört `vendor/` nicht ins Git, `composer.lock` aber schon?
- Was bedeutet `"^2.1"` in der `composer.json`?
- Was ist der Unterschied zwischen `composer install` und `composer update`?
