# Blade-Templates & Vite

## Einführung

Blade ist Laravels Template-Sprache. Das Wichtigste vorweg: `{{ $variable }}` **escaped automatisch** – der XSS-Schutz aus Modul 3 ist eingebaut. `{!! $variable !!}` gibt ungefiltert aus und ist nur für vertrauenswürdiges HTML gedacht.

## Lernziele

- Du kannst Daten an Views übergeben und ausgeben.
- Du beherrschst Blade-Direktiven (`@if`, `@foreach`, `@forelse`, `@auth`, `@csrf`, `@method`, `@error`).
- Du baust Layouts mit **Komponenten** (`<x-layout>`) und Slots.
- Du weißt, wofür Vite zuständig ist (CSS/JS bauen) und kannst Tailwind nutzen.

## Aufgaben

1. Lies [Views](https://laravel.com/docs/views) und [Blade Templates](https://laravel.com/docs/blade) – bis einschließlich „Components“ und „Building Layouts“.
2. Lies [Asset Bundling (Vite)](https://laravel.com/docs/vite) – Abschnitte „Installation & Setup“ und „Running Vite“.
3. Baue ein Layout als Blade-Komponente mit Navigation und Footer. Die Seiten aus Lektion 2 sollen es nutzen.
4. Übergib aus einem Controller ein Array von Fahrzeugen an eine View und gib es als Tabelle aus. Nutze `@forelse`, um bei leerer Liste einen Hinweis anzuzeigen.
5. Test: Gib `<script>alert(1)</script>` über `{{ }}` aus und schau dir den HTML-Quelltext an.

## Wissensüberprüfung

- Was ist der Unterschied zwischen `{{ }}` und `{!! !!}`?
- Was ist der Unterschied zwischen `@foreach` und `@forelse`?
- Was ist ein Slot?
- Warum musst du bei Änderungen an CSS `npm run dev` laufen haben?
