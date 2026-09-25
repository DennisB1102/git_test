# Entwicklungsumgebung einrichten

## Einführung

Bevor du Code schreibst, brauchst du Werkzeuge: PHP selbst, Composer (den Paketmanager), einen Editor und ein Terminal. Die Einrichtung ist oft der frustrierendste Teil – lass dich davon nicht entmutigen.

## Lernziele

- PHP (mind. Version 8.3) und Composer sind installiert und im Terminal aufrufbar.
- Du hast einen Editor mit PHP-Unterstützung eingerichtet.
- Du beherrschst die wichtigsten Terminal-Befehle.

## Aufgaben

### 1. PHP & Composer installieren

Der einfachste Weg ist offiziell von Laravel:

- **macOS / Windows:** [Laravel Herd](https://herd.laravel.com) – installiert PHP, Composer, Node und einen lokalen Webserver mit einem Klick. Die kostenlose Version reicht völlig.
- **Linux / WSL / alternativ:** das Installationsskript von [php.new](https://php.new) – ein Befehl, der PHP, Composer und den Laravel-Installer einrichtet.
- **Windows-Tipp:** Überlege, ob du mit [WSL 2](https://learn.microsoft.com/de-de/windows/wsl/install) (Linux unter Windows) arbeiten willst. Viele Tutorials setzen ein Unix-Terminal voraus. Herd unter Windows funktioniert aber ebenfalls gut.

Prüfe danach im Terminal:

```bash
php -v
composer -V
```

### 2. Editor

Empfehlung: [Visual Studio Code](https://code.visualstudio.com) (kostenlos) mit den Erweiterungen:

- **PHP Intelephense** – Autovervollständigung, Fehlererkennung
- **Laravel** (offizielle Erweiterung von Laravel) – ab Modul 5
- **EditorConfig**

Alternative: [PhpStorm](https://www.jetbrains.com/phpstorm/) – der Profi-Standard für PHP. Für nicht-kommerzielle Nutzung ist es inzwischen kostenlos erhältlich (prüfe die aktuellen Lizenzbedingungen).

### 3. Terminal-Grundlagen

Lies und übe die Odin-Lektion [„Command Line Basics“](https://www.theodinproject.com/lessons/foundations-command-line-basics) (englisch). Du solltest sicher beherrschen: `pwd`, `ls`, `cd`, `mkdir`, `touch`, `cp`, `mv`, `rm`, Tab-Vervollständigung und Pfeiltaste-hoch.

### 4. Dein erstes PHP-Skript

```bash
mkdir ~/php-lernen && cd ~/php-lernen
echo '<?php echo "Es läuft!\n";' > test.php
php test.php
```

Probiere auch den interaktiven Modus: `php -a`.

### 5. Dieses Repository

Klone dieses Repository (wie das geht, lernst du in der nächsten Lektion – komm danach zurück) und führe aus:

```bash
php uebungen/pruefen.php 01-hallo-welt
```

Du solltest rote ✘ sehen. Das ist richtig so – die Übung ist noch nicht gelöst.

## Wissensüberprüfung

- Mit welchem Befehl prüfst du die installierte PHP-Version?
- Wofür brauchst du Composer?
- Was ist der Unterschied zwischen `cd ..` und `cd ~`?

## Zusätzliche Ressourcen

- [PHP-Handbuch: Installation](https://www.php.net/manual/de/install.php)
- [Composer: Getting Started](https://getcomposer.org/doc/00-intro.md)
