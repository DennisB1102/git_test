# 🛠 Projekt: Wissensdatenbank für die Wache

## Einführung

Ein größeres Projekt, das fast alles aus Modul 6 nutzt: eine interne Wissensdatenbank, in der Kolleg:innen Artikel zu Geräten, Abläufen und Tipps veröffentlichen („Wo ist was auf dem neuen RTW?“, „Kurzanleitung Beatmungsgerät“, „Anfahrt Kreisklinikum Liegendanfahrt“).

> ⚠️ Medizinische Inhalte in einer echten Wissensdatenbank bräuchten eine fachliche Freigabe und Versionierung. Für dieses Projekt genügen erfundene Inhalte – aber genau diese Freigabe bildest du unten als Feature ab.

## Anforderungen

**Rollen & Rechte** (Policies!)

- [ ] Rollen: *Leser:in*, *Autor:in*, *Redaktion*, *Admin*
- [ ] Autor:innen schreiben Artikel; ein Artikel ist erst nach Freigabe durch die *Redaktion* für alle sichtbar (Status-Enum: Entwurf, zur Prüfung, veröffentlicht, archiviert)
- [ ] Admins verwalten Benutzer und Rollen

**Inhalte**

- [ ] Artikel mit Titel, Inhalt (Markdown, sicher gerendert – z. B. über `Str::markdown()` mit passenden Optionen gegen HTML-Injection), Kategorie und mehreren Tags (n:m)
- [ ] Dateianhänge (Bilder, PDFs), nur für eingeloggte Benutzer abrufbar
- [ ] Versionsverlauf: Bei jeder Änderung wird die vorherige Version gespeichert und ist einsehbar
- [ ] Kommentare zu Artikeln
- [ ] Live-Suche (Livewire) über Titel, Inhalt und Tags

**Benachrichtigungen & Hintergrundjobs**

- [ ] Die Redaktion wird per Notification (Mail + Datenbank) informiert, wenn ein Artikel zur Prüfung eingereicht wird – über die Queue
- [ ] Autor:innen werden benachrichtigt, wenn ihr Artikel veröffentlicht oder kommentiert wurde
- [ ] Ein geplanter Befehl markiert Artikel, die seit 12 Monaten nicht aktualisiert wurden, als „Überprüfung fällig“

**API**

- [ ] Lesende API (Sanctum-Token) für veröffentlichte Artikel, mit API Resources und Pagination

**Qualität**

- [ ] Keine N+1-Probleme (`preventLazyLoading` im Entwicklungsmodus aktiv)
- [ ] Mindestens 40 Tests, insbesondere für alle Berechtigungsregeln
- [ ] Pint, sinnvolle Commits, eine `README.md` mit Installationsanleitung

## Zusatzaufgaben

- [ ] „Gelesen und verstanden“-Bestätigung für ausgewählte Artikel (z. B. Dienstanweisungen) mit Übersicht für die Wachenleitung
- [ ] Diff-Ansicht zwischen zwei Versionen eines Artikels
