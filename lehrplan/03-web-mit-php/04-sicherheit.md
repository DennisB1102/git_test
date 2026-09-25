# Sicherheit – die Grundlagen

## Einführung

Sicherheitslücken in Webanwendungen folgen immer wieder denselben Mustern. Die gute Nachricht: Die häufigsten lassen sich mit wenigen Regeln vermeiden. Laravel schützt dich später bei vielem automatisch – aber nur, wenn du weißt, wann du den Schutz versehentlich aushebelst (z. B. mit `{!! !!}` in Blade oder `DB::raw()`).

Gerade im Gesundheitsbereich sind Daten besonders schützenswert (Art. 9 DSGVO). Ein Grund mehr, das ernst zu nehmen.

## Lernziele

- Du kennst die OWASP Top 10 vom Namen her.
- Du verstehst und verhinderst **XSS** (Ausgabe immer escapen: `htmlspecialchars`).
- Du verstehst und verhinderst **SQL-Injection** (Prepared Statements – kommt in Modul 4).
- Du verstehst und verhinderst **CSRF** (Token in Formularen).
- Du weißt, warum Fehlermeldungen im Live-Betrieb nicht angezeigt werden dürfen.

## Aufgaben

1. Lies die [OWASP Top 10](https://owasp.org/www-project-top-ten/) – zumindest die Übersicht und je Punkt die Beschreibung.
2. Lies das [OWASP Cross Site Scripting Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html) (Abschnitt „Output Encoding“).
3. Lies das [OWASP CSRF Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross-Site_Request_Forgery_Prevention_Cheat_Sheet.html) (Abschnitt „Synchronizer Token Pattern“).
4. Lies [htmlspecialchars](https://www.php.net/manual/de/function.htmlspecialchars.php).
5. **Greife dich selbst an:** Gib in dein Kontaktformular aus Lektion 2 als Namen `<script>alert('XSS')</script>` ein. Wenn ein Pop-up erscheint, hast du eine Lücke gefunden – schließe sie mit einer Hilfsfunktion `e(string $text): string`.
6. Ergänze dein Formular um einen CSRF-Token (`bin2hex(random_bytes(32))` in der Session, Vergleich mit `hash_equals`).

## Wissensüberprüfung

- Was ist XSS, und an welcher Stelle – Eingabe oder Ausgabe – schützt du dich primär?
- Wie funktioniert ein CSRF-Angriff? Warum hilft ein Token?
- Warum `hash_equals()` statt `===` beim Vergleich von Tokens?
- Nenne drei Punkte der OWASP Top 10.
