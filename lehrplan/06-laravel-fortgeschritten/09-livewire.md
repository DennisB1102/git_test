# Interaktive Oberflächen mit Livewire

## Einführung

Moderne Oberflächen reagieren ohne komplettes Neuladen der Seite: Live-Suche, Filter, Formulare mit sofortiger Validierung. Klassisch braucht man dafür viel JavaScript. **Livewire** lässt dich interaktive Komponenten stattdessen in PHP und Blade schreiben.

Die Alternativen: **Inertia** mit React/Vue (wenn du tiefer in JavaScript einsteigen willst) oder eine separate JavaScript-App mit API (Lektion 8). Für dich als PHP-Fokussierten ist Livewire der naheliegende Einstieg.

## Lernziele

- Du kannst Livewire-Komponenten mit Properties und Actions schreiben.
- Du kannst Formulare mit Echtzeit-Validierung bauen.
- Du verstehst grob, was im Hintergrund passiert (AJAX-Requests, DOM-Diffing).
- Du kennst Alpine.js für kleine rein clientseitige Interaktionen.

## Aufgaben

1. Lies die [Livewire-Dokumentation](https://livewire.laravel.com/docs): *Quickstart*, *Components*, *Properties*, *Actions*, *Forms*, *Validation*, *Pagination*.
2. Ersetze im Fortbildungs-Tracker die Fortbildungsliste durch eine Livewire-Komponente mit Live-Suche und Filtern, die ohne Neuladen funktionieren.
3. Lies die Einführung von [Alpine.js](https://alpinejs.dev/start-here) und baue ein ausklappbares Menü.
4. Optional: Schau dir [Inertia](https://inertiajs.com) an, um die Alternative zu kennen.

## Wissensüberprüfung

- Was passiert technisch, wenn du in einer Livewire-Komponente einen Button mit `wire:click` klickst?
- Warum musst du auch in Livewire-Actions Berechtigungen prüfen?
- Wann reicht Alpine.js, wann brauchst du Livewire?
