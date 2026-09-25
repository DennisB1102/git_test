# 🎓 Abschlussprojekt: Digitaler Ausbildungsnachweis

## Einführung

Das Abschlussprojekt verbindet dein Programmierwissen mit deiner Expertise als Praxisanleiter. Du baust eine Anwendung zur Dokumentation der praktischen Ausbildung: Auszubildende dokumentieren ihre Einsätze und Kompetenzen, Praxisanleiter:innen begleiten, bewerten und geben Feedback.

Du kennst die fachlichen Anforderungen besser, als ein Außenstehender sie je formulieren könnte – das macht dieses Projekt zu einem echten Portfolio-Stück. Die Anforderungen unten sind ein Vorschlag. **Passe sie an deine Realität an** – das Formulieren der Anforderungen ist Teil der Aufgabe.

> 🔒 **Wichtig:** Entwickle und präsentiere ausschließlich mit **erfundenen Daten**. Keine echten Namen von Auszubildenden, keine Patientendaten – auch nicht pseudonymisiert. Der Einsatz mit echten Daten wäre ein eigenes Vorhaben mit Arbeitgeber, Datenschutzbeauftragten und ggf. Personal- oder Betriebsrat. Auch Bewertungsdaten von Auszubildenden sind personenbezogene Daten.

## Vorgehen

1. **Anforderungen** – Schreibe User Stories: „Als *Rolle* möchte ich *Funktion*, damit *Nutzen*.“ Priorisiere in Muss/Soll/Kann.
2. **Datenmodell** – ER-Diagramm zeichnen, bevor du Code schreibst.
3. **Skizzen** – Grobe Skizzen der wichtigsten Seiten (Papier reicht).
4. **Iterativ bauen** – Erst die Muss-Anforderungen vollständig, getestet und deployt. Dann erweitern.
5. **Dokumentieren** – README mit Screenshots, Installationsanleitung, Architekturentscheidungen.

## Vorschlag für Anforderungen

**Rollen**

- [ ] Auszubildende, Praxisanleiter:innen, Schulleitung/Admin
- [ ] Zuordnung: Auszubildende haben eine:n oder mehrere Praxisanleiter:innen

**Für Auszubildende**

- [ ] Einsätze dokumentieren (Datum, Einsatzart, **abstrakt** beschriebenes Krankheitsbild, eigene Maßnahmen, Reflexion) – ohne jegliche Patientendaten
- [ ] Übersicht über den Stand der Kompetenzen / Lernziele eines Ausbildungsabschnitts
- [ ] Stundenerfassung je Einsatzbereich
- [ ] Feedback der Praxisanleitung einsehen

**Für Praxisanleiter:innen**

- [ ] Übersicht aller zugeordneten Auszubildenden mit Fortschritt
- [ ] Anleitungssituationen dokumentieren (geplant / durchgeführt, Thema, Dauer)
- [ ] Kompetenzen einschätzen (z. B. nach einer Skala, die du fachlich festlegst) mit Freitext-Feedback
- [ ] Gespräche dokumentieren (Erst-, Zwischen-, Abschlussgespräch)
- [ ] Benachrichtigung, wenn ein:e Auszubildende:r einen Eintrag zur Durchsicht einreicht

**Für Admins**

- [ ] Verwaltung von Benutzern, Ausbildungsjahrgängen, Lernzielkatalogen

**Auswertung**

- [ ] PDF-Export eines Ausbildungsnachweises (z. B. mit einem PDF-Paket deiner Wahl)
- [ ] Übersicht: Anleitungsstunden je Auszubildendem im Vergleich zu einer Soll-Vorgabe

**Technische Mindestanforderungen**

- [ ] Laravel mit Policies für **jede** Datenzugriffsregel und Tests, die diese Regeln beweisen
- [ ] Livewire (oder Inertia) für mindestens zwei interaktive Bereiche
- [ ] Queues für Benachrichtigungen und PDF-Erzeugung
- [ ] CI mit Tests, Pint und Larastan
- [ ] Deployt und öffentlich erreichbar (mit Demo-Zugängen und erfundenen Daten)
- [ ] Datenschutz-Überlegung aus Modul 7, Lektion 3, als Datei im Repository
- [ ] Protokollierung sensibler Aktionen (wer hat wann welche Bewertung geändert?)

## Bewertungsbogen für dich selbst

Nutze deine Erfahrung als Praxisanleiter und bewerte dein Projekt ehrlich – oder bitte eine:n erfahrene:n Entwickler:in um ein Code-Review:

| Kriterium | Frage |
|-----------|-------|
| Funktion | Erfüllt die Anwendung alle Muss-Anforderungen? |
| Sicherheit | Kann ein Benutzer irgendwie Daten sehen, die ihm nicht zustehen? (Gezielt ausprobieren!) |
| Tests | Würdest du dich trauen, ein großes Refactoring zu machen, nur weil die Tests grün sind? |
| Lesbarkeit | Verstehst du deinen Code von vor 4 Wochen noch ohne Mühe? |
| Nutzbarkeit | Könnte ein:e Kolleg:in die App ohne Erklärung bedienen? Lass es jemanden ausprobieren. |
