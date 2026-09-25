# Datenschutz & Sicherheit in der Praxis

## Einführung

Du kommst aus einem Bereich mit besonders sensiblen Daten. Wenn du Anwendungen für den Rettungsdienst oder die Ausbildung baust, ist die Versuchung groß, sie „einfach mal“ im Team einzusetzen. Dieser Abschnitt soll dich dafür sensibilisieren, **was dann rechtlich und technisch dazugehört**. Er ersetzt keine Rechtsberatung.

## Lernziele

- Du kennst die Grundprinzipien der DSGVO (Rechtmäßigkeit, Zweckbindung, Datenminimierung, Speicherbegrenzung, Integrität & Vertraulichkeit).
- Du weißt, dass Gesundheitsdaten nach Art. 9 DSGVO besonders geschützt sind.
- Du kennst technische Maßnahmen: Verschlüsselung (Transport und ruhend), Zugriffsbeschränkung, Protokollierung, Pseudonymisierung, Löschkonzepte.
- Du weißt, wann du **nicht** allein entscheiden darfst (Datenschutzbeauftragte:r, Arbeitgeber, ggf. Personalrat/Betriebsrat).

## Aufgaben

1. Lies die [Grundsätze der Verarbeitung (Art. 5 DSGVO)](https://dsgvo-gesetz.de/art-5-dsgvo/) und [Art. 9 DSGVO](https://dsgvo-gesetz.de/art-9-dsgvo/).
2. Lies das Kurzpapier-Angebot der Datenschutzkonferenz auf [datenschutzkonferenz-online.de](https://www.datenschutzkonferenz-online.de/kurzpapiere.html) – insbesondere zu technischen und organisatorischen Maßnahmen.
3. Lies in der Laravel-Doku [Encryption](https://laravel.com/docs/encryption) und zu verschlüsselten Casts in [Eloquent: Mutators & Casting](https://laravel.com/docs/eloquent-mutators#encrypted-casting).
4. Gehe die [OWASP Top 10](https://owasp.org/www-project-top-ten/) noch einmal durch – jetzt mit deinem Laravel-Wissen. Notiere zu jedem Punkt, wie Laravel dich schützt und wo du selbst aufpassen musst.
5. Schreibe für dein Abschlussprojekt eine kurze Datenschutz-Überlegung: Welche personenbezogenen Daten werden gespeichert? Wer darf sie sehen? Wann werden sie gelöscht?

## Wissensüberprüfung

- Was bedeutet Datenminimierung für das Design deiner Datenbank?
- Was ist der Unterschied zwischen Pseudonymisierung und Anonymisierung?
- Warum solltest du eine selbstgebaute App nicht ohne Rücksprache im Dienst mit echten Daten einsetzen?
