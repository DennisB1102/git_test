# Deployment

## Einführung

Eine Anwendung, die nur auf deinem Laptop läuft, hat noch niemandem geholfen. Deployment heißt: Code auf einen Server bringen, konfigurieren, absichern, und Updates ohne Datenverlust einspielen.

Es gibt zwei grundsätzliche Wege:

- **Verwaltete Plattformen** (z. B. Laravel Cloud, Laravel Forge + eigener Server, andere PaaS-Anbieter) – weniger Arbeit, kostet Geld.
- **Eigener VPS** (z. B. bei einem deutschen Hoster) – du lernst am meisten, trägst aber die volle Verantwortung für Updates und Sicherheit.

Kritischer Hinweis: Einen eigenen Server zu betreiben heißt, ihn *dauerhaft* zu pflegen (Sicherheitsupdates, Backups, Monitoring). Für ein Lernprojekt ist das eine gute Erfahrung – für eine Anwendung mit sensiblen Daten solltest du sehr genau überlegen, ob du das leisten kannst.

## Lernziele

- Du kennst die Schritte eines Laravel-Deployments (Code holen, `composer install --no-dev`, `migrate --force`, Caches aufbauen, Queue-Worker neu starten).
- Du konfigurierst die Produktionsumgebung sicher (`APP_ENV=production`, `APP_DEBUG=false`, HTTPS).
- Du richtest Queue-Worker und Scheduler auf einem Server ein.
- Du hast ein Backup-Konzept für Datenbank und Dateien – und hast eine Wiederherstellung einmal getestet.

## Aufgaben

1. Lies [Deployment](https://laravel.com/docs/deployment) komplett.
2. Lies in [Queues](https://laravel.com/docs/queues#supervisor-configuration) den Abschnitt zu Supervisor und in [Task Scheduling](https://laravel.com/docs/scheduling#running-the-scheduler) den Abschnitt zum Cron-Eintrag.
3. Bringe deinen Fortbildungs-Tracker online – auf einem Weg deiner Wahl. Mit HTTPS.
4. Richte automatische Datenbank-Backups ein (z. B. mit [spatie/laravel-backup](https://spatie.be/docs/laravel-backup)) und **teste die Wiederherstellung**. Ein Backup, das nie wiederhergestellt wurde, ist nur eine Hoffnung.
5. Optional: Automatisches Deployment aus GitHub Actions nach erfolgreicher CI.

## Wissensüberprüfung

- Welche Befehle gehören in ein Deployment-Skript und in welcher Reihenfolge?
- Warum `composer install --no-dev` auf dem Server?
- Was passiert, wenn du vergisst, den Queue-Worker nach einem Deployment neu zu starten?
- Was muss auf dem Server laufen, damit der Scheduler funktioniert?
