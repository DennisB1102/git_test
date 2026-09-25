# Git & GitHub

## Einführung

Git ist eine Versionsverwaltung: Sie speichert jeden Stand deines Codes, sodass du jederzeit zurückspringen, Dinge ausprobieren und mit anderen zusammenarbeiten kannst. Vergleich aus deiner Welt: ein lückenloses Einsatzprotokoll – jeder Eintrag mit Zeitstempel, Autor und Begründung, nichts wird überschrieben.

GitHub ist ein Dienst, der Git-Repositories online speichert – dein Backup und dein Portfolio.

## Lernziele

- Du kannst ein Repository anlegen, klonen, Änderungen committen und pushen.
- Du verstehst Working Directory, Staging Area und Commits.
- Du kannst mit Branches arbeiten.
- Du schreibst aussagekräftige Commit-Messages.

## Aufgaben

1. Lies im kostenlosen Buch [Pro Git (deutsch)](https://git-scm.com/book/de/v2) die Kapitel 1 und 2 sowie 3.1–3.2 (Branches).
2. Arbeite die Odin-Lektionen [„Git Basics“](https://www.theodinproject.com/lessons/foundations-git-basics) und [„Commit Messages“](https://www.theodinproject.com/lessons/foundations-commit-messages) durch.
3. Richte die [SSH-Verbindung zu GitHub](https://docs.github.com/de/authentication/connecting-to-github-with-ssh) ein.
4. **Praxis:** Klone dieses Repository, erstelle einen Branch `mein-fortschritt`, hake in `FORTSCHRITT.md` die ersten Lektionen ab, committe und pushe.
5. Spiele [Learn Git Branching](https://learngitbranching.js.org/?locale=de_DE) – interaktiv und auf Deutsch – mindestens die Einführungslevel.

## Die wichtigsten Befehle

```bash
git status                  # Was hat sich geändert?
git add datei.php           # Änderung vormerken (stagen)
git commit -m "Nachricht"   # Vorgemerkte Änderungen speichern
git log --oneline           # Verlauf anzeigen
git switch -c neuer-branch  # Neuen Branch erstellen und wechseln
git push                    # Hochladen
git pull                    # Herunterladen
```

## Wissensüberprüfung

- Was ist der Unterschied zwischen `git add` und `git commit`?
- Warum arbeitet man mit Branches?
- Was macht eine gute Commit-Message aus?
- Was ist der Unterschied zwischen Git und GitHub?

## Zusätzliche Ressourcen

- [Oh Shit, Git!?!](https://ohshitgit.com/de) – Rettung, wenn etwas schiefgeht
