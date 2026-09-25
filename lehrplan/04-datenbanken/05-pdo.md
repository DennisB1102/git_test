# PDO – Datenbanken in PHP

## Einführung

**PDO** (PHP Data Objects) ist PHPs einheitliche Schnittstelle zu Datenbanken. Laravel nutzt unter der Haube ebenfalls PDO.

Die wichtigste Regel dieses Moduls: **Benutzereingaben niemals direkt in SQL einsetzen.** Immer **Prepared Statements** mit Platzhaltern verwenden. Sonst: SQL-Injection – und jemand löscht deine Datenbank über ein Suchfeld.

## Lernziele

- Du kannst eine PDO-Verbindung aufbauen, inkl. `ERRMODE_EXCEPTION`.
- Du verwendest ausschließlich Prepared Statements für variable Werte.
- Du kannst Ergebnisse als Arrays oder Objekte abrufen.
- Du kannst Transaktionen mit PDO nutzen.
- Du verstehst SQL-Injection und kannst sie demonstrieren.

## Aufgaben

1. Lies im Handbuch [PDO – Einführung](https://www.php.net/manual/de/intro.pdo.php), [Verbindungen](https://www.php.net/manual/de/pdo.connections.php), [Prepared Statements](https://www.php.net/manual/de/pdo.prepared-statements.php), [Transaktionen](https://www.php.net/manual/de/pdo.transactions.php).
2. Lies [PHP The Right Way – Databases](https://phptherightway.com/#databases).
3. Lies das [OWASP SQL Injection Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html) (Abschnitt „Primary Defenses“).
4. **Greife dich selbst an:** Baue *absichtlich* eine unsichere Suche `"SELECT * FROM medikamente WHERE name = '$suche'"` und finde eine Eingabe, die alle Datensätze liefert. Dann baue sie sicher mit Platzhaltern nach. Lösche danach den unsicheren Code.
5. Schreibe eine Klasse `MedikamentRepository` mit den Methoden `alle()`, `finde(int $id)`, `speichern(array $daten)`, `loeschen(int $id)`. PDO wird per Konstruktor übergeben (Dependency Injection!).

## Wissensüberprüfung

- Was ist SQL-Injection? Zeige ein Beispiel.
- Warum schützen Prepared Statements davor?
- Warum sollte `PDO::ATTR_ERRMODE` auf `ERRMODE_EXCEPTION` stehen?
- Kann man Tabellen- oder Spaltennamen als Platzhalter übergeben? Wie gehst du damit um?
