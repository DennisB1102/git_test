<?php

declare(strict_types=1);

/*
 * Mini-Testrunner für die Übungen – bewusst ohne Composer/PHPUnit,
 * damit du sofort loslegen kannst. PHPUnit/Pest lernst du in Modul 2.
 *
 * Aufruf:
 *   php uebungen/pruefen.php 01-hallo-welt            # prüft deine aufgabe.php
 *   php uebungen/pruefen.php 01-hallo-welt --loesung  # prüft die Musterlösung
 *   php uebungen/pruefen.php --alle                   # prüft alle Übungen
 */

final class AssertionFehler extends Exception {}

function gleich(mixed $erwartet, mixed $tatsaechlich, string $nachricht = ''): void
{
    if ($erwartet !== $tatsaechlich) {
        throw new AssertionFehler(sprintf(
            "%sErwartet: %s\n      Erhalten: %s",
            $nachricht !== '' ? $nachricht . "\n      " : '',
            var_export($erwartet, true),
            var_export($tatsaechlich, true),
        ));
    }
}

function ungefaehr(float $erwartet, float $tatsaechlich, float $toleranz = 0.01): void
{
    if (abs($erwartet - $tatsaechlich) > $toleranz) {
        throw new AssertionFehler("Erwartet ≈ {$erwartet}, erhalten: {$tatsaechlich}");
    }
}

function wahr(bool $bedingung, string $nachricht = 'Bedingung ist nicht erfüllt'): void
{
    if (!$bedingung) {
        throw new AssertionFehler($nachricht);
    }
}

/** @param class-string<Throwable> $klasse */
function wirft(string $klasse, callable $code): void
{
    try {
        $code();
    } catch (Throwable $e) {
        if ($e instanceof $klasse) {
            return;
        }
        throw new AssertionFehler("Erwartet {$klasse}, geworfen wurde " . $e::class . ': ' . $e->getMessage());
    }
    throw new AssertionFehler("Erwartet, dass {$klasse} geworfen wird – es wurde aber nichts geworfen.");
}

function pruefeUebung(string $ordner, bool $loesung): bool
{
    $basis = __DIR__ . '/' . $ordner;
    $datei = $loesung ? "{$basis}/loesung/aufgabe.php" : "{$basis}/aufgabe.php";

    if (!is_file("{$basis}/tests.php") || !is_file($datei)) {
        fwrite(STDERR, "Übung '{$ordner}' nicht gefunden.\n");
        return false;
    }

    // Jede Übung in einem eigenen Prozess, damit sich Funktionsnamen nicht beißen.
    $befehl = sprintf(
        '%s %s --intern %s %s',
        escapeshellarg(PHP_BINARY),
        escapeshellarg(__FILE__),
        escapeshellarg($ordner),
        $loesung ? '--loesung' : '',
    );
    passthru($befehl, $code);
    return $code === 0;
}

function fuehreTestsAus(string $ordner, bool $loesung): int
{
    $basis = __DIR__ . '/' . $ordner;
    require $loesung ? "{$basis}/loesung/aufgabe.php" : "{$basis}/aufgabe.php";
    /** @var array<string, callable> $tests */
    $tests = require "{$basis}/tests.php";

    echo "\n▶ {$ordner}" . ($loesung ? ' (Musterlösung)' : '') . "\n";
    $bestanden = 0;
    foreach ($tests as $name => $test) {
        try {
            $test();
            echo "  ✔ {$name}\n";
            $bestanden++;
        } catch (Throwable $e) {
            echo "  ✘ {$name}\n      " . ($e instanceof AssertionFehler ? '' : $e::class . ': ') . $e->getMessage() . "\n";
        }
    }
    $gesamt = count($tests);
    echo "  {$bestanden}/{$gesamt} Tests bestanden\n";
    return $bestanden === $gesamt ? 0 : 1;
}

$args = array_slice($argv, 1);
$loesung = in_array('--loesung', $args, true);

if (($args[0] ?? '') === '--intern') {
    exit(fuehreTestsAus($args[1], $loesung));
}

if (in_array('--alle', $args, true)) {
    $ordner = array_map('basename', glob(__DIR__ . '/[0-9][0-9]-*', GLOB_ONLYDIR));
    $ok = true;
    foreach ($ordner as $o) {
        $ok = pruefeUebung($o, $loesung) && $ok;
    }
    exit($ok ? 0 : 1);
}

$ziel = array_values(array_filter($args, fn ($a) => !str_starts_with($a, '--')))[0] ?? null;
if ($ziel === null) {
    echo "Aufruf: php uebungen/pruefen.php <übung> [--loesung]   oder   --alle\n";
    exit(1);
}
exit(pruefeUebung(rtrim($ziel, '/'), $loesung) ? 0 : 1);
