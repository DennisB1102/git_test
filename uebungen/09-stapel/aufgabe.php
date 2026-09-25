<?php

declare(strict_types=1);

interface Sammlung extends Countable
{
    public function hinzufuegen(mixed $element): void;

    /** Entfernt das nächste Element und gibt es zurück. */
    public function entnehmen(): mixed;

    /** Gibt das nächste Element zurück, ohne es zu entfernen. */
    public function oben(): mixed;

    public function istLeer(): bool;
}

class Stapel implements Sammlung
{
    public function hinzufuegen(mixed $element): void
    {
        // Dein Code hier
    }

    public function entnehmen(): mixed
    {
        // Dein Code hier
        return null;
    }

    public function oben(): mixed
    {
        // Dein Code hier
        return null;
    }

    public function istLeer(): bool
    {
        // Dein Code hier
        return true;
    }

    public function count(): int
    {
        // Dein Code hier
        return 0;
    }
}

class Warteschlange implements Sammlung
{
    public function hinzufuegen(mixed $element): void
    {
        // Dein Code hier
    }

    public function entnehmen(): mixed
    {
        // Dein Code hier
        return null;
    }

    public function oben(): mixed
    {
        // Dein Code hier
        return null;
    }

    public function istLeer(): bool
    {
        // Dein Code hier
        return true;
    }

    public function count(): int
    {
        // Dein Code hier
        return 0;
    }
}
