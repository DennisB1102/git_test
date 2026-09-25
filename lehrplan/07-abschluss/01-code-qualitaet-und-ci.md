# Code-Qualität & Continuous Integration

## Einführung

Profis verlassen sich nicht darauf, dass sie daran denken, die Tests laufen zu lassen. Sie automatisieren es: Bei jedem Push prüft ein Server (**CI** – Continuous Integration), ob Tests, Codestil und statische Analyse in Ordnung sind.

## Lernziele

- Du nutzt **statische Analyse** mit PHPStan/Larastan und verstehst ihre Level.
- Du richtest **GitHub Actions** ein, die Tests, Pint und PHPStan bei jedem Push ausführen.
- Du arbeitest mit Pull Requests – auch alleine – und prüfst deinen eigenen Code vor dem Mergen.
- Du hältst Abhängigkeiten aktuell und prüfst sie auf Sicherheitslücken (`composer audit`).

## Aufgaben

1. Lies die Einführung von [PHPStan](https://phpstan.org/user-guide/getting-started) und die README von [Larastan](https://github.com/larastan/larastan). Installiere Larastan im Fortbildungs-Tracker und arbeite dich Level für Level hoch (mindestens Level 5).
2. Lies [Understanding GitHub Actions](https://docs.github.com/de/actions/about-github-actions/understanding-github-actions).
3. Lege `.github/workflows/tests.yml` an, die bei jedem Push: PHP einrichtet (z. B. mit der Action `shivammathur/setup-php`), `composer install` ausführt, `pint --test`, PHPStan und `php artisan test` laufen lässt.
4. Arbeite ab jetzt mit Branches und Pull Requests. Lass die CI grün werden, bevor du mergst.
5. Führe `composer audit` aus. Richte optional [Dependabot](https://docs.github.com/de/code-security/dependabot) ein.

## Wissensüberprüfung

- Was findet statische Analyse, was Tests nicht finden – und umgekehrt?
- Was passiert in deinem Workflow, wenn ein Test fehlschlägt?
- Warum lohnen sich Pull Requests auch in Solo-Projekten?
