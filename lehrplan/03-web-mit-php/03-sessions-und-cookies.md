# Sessions & Cookies

## Einführung

HTTP ist zustandslos – jeder Request ist für den Server ein Fremder. **Cookies** sind kleine Datenschnipsel, die der Browser bei jedem Request mitschickt. **Sessions** speichern Daten auf dem Server und merken sich über ein Cookie (die Session-ID), welcher Besucher wer ist. So funktionieren Logins.

## Lernziele

- Du kannst Sessions starten, Werte speichern und löschen.
- Du verstehst den Unterschied zwischen Cookie und Session.
- Du kannst einen einfachen Login mit `password_hash()` und `password_verify()` bauen.
- Du kennst „Flash Messages“ (Nachrichten, die genau einmal angezeigt werden).
- Du kennst die Cookie-Attribute `HttpOnly`, `Secure` und `SameSite`.

## Aufgaben

1. Lies [Sessions – Grundlegende Verwendung](https://www.php.net/manual/de/session.examples.basic.php) und [Session-Sicherheit](https://www.php.net/manual/de/features.session.security.management.php).
2. Lies [setcookie](https://www.php.net/manual/de/function.setcookie.php) und auf MDN [HTTP-Cookies](https://developer.mozilla.org/de/docs/Web/HTTP/Cookies).
3. Lies [Sicheres Passwort-Hashing](https://www.php.net/manual/de/faq.passwords.php) und [password_hash](https://www.php.net/manual/de/function.password-hash.php).
4. Baue: Login-Seite, geschützte Seite (nur eingeloggt erreichbar), Logout. Benutzer stehen fest in einem PHP-Array – mit **gehashten** Passwörtern. Nach dem Login `session_regenerate_id(true)` aufrufen.
5. Ergänze Flash Messages („Erfolgreich eingeloggt“), die nach einmaliger Anzeige verschwinden.

## Wissensüberprüfung

- Wo liegen Session-Daten, wo Cookie-Daten?
- Warum speichert man Passwörter nie im Klartext und nie mit `md5()`?
- Was ist Session-Fixation und wie verhinderst du sie?
- Was bewirkt `HttpOnly` bei einem Cookie?
