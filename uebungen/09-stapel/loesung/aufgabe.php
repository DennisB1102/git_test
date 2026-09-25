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

abstract class ListenSammlung implements Sammlung
{
    /** @var list<mixed> */
    protected array $elemente = [];

    public function hinzufuegen(mixed $element): void
    {
        $this->elemente[] = $element;
    }

    public function istLeer(): bool
    {
        return $this->elemente === [];
    }

    public function count(): int
    {
        return count($this->elemente);
    }

    protected function pruefeNichtLeer(): void
    {
        if ($this->istLeer()) {
            throw new UnderflowException('Die Sammlung ist leer.');
        }
    }
}

class Stapel extends ListenSammlung
{
    public function entnehmen(): mixed
    {
        $this->pruefeNichtLeer();
        return array_pop($this->elemente);
    }

    public function oben(): mixed
    {
        $this->pruefeNichtLeer();
        return $this->elemente[array_key_last($this->elemente)];
    }
}

class Warteschlange extends ListenSammlung
{
    public function entnehmen(): mixed
    {
        $this->pruefeNichtLeer();
        return array_shift($this->elemente);
    }

    public function oben(): mixed
    {
        $this->pruefeNichtLeer();
        return $this->elemente[0];
    }
}
