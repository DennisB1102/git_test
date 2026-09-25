<?php

declare(strict_types=1);

class DeckungFehltException extends RuntimeException
{
}

class Konto
{
    public function __construct(
        private readonly string $inhaber,
        private int $kontostandInCent = 0,
    ) {
        if ($kontostandInCent < 0) {
            throw new InvalidArgumentException('Der Startbetrag darf nicht negativ sein.');
        }
    }

    public function inhaber(): string
    {
        return $this->inhaber;
    }

    public function kontostand(): int
    {
        return $this->kontostandInCent;
    }

    public function einzahlen(int $cent): void
    {
        $this->pruefeBetrag($cent);
        $this->kontostandInCent += $cent;
    }

    public function abheben(int $cent): void
    {
        $this->pruefeBetrag($cent);
        if ($cent > $this->kontostandInCent) {
            throw new DeckungFehltException("Kontostand von {$this->inhaber} reicht nicht aus.");
        }
        $this->kontostandInCent -= $cent;
    }

    public function ueberweisen(Konto $ziel, int $cent): void
    {
        // Erst abheben: Wirft das eine Exception, wurde beim Ziel noch nichts gebucht.
        $this->abheben($cent);
        $ziel->einzahlen($cent);
    }

    private function pruefeBetrag(int $cent): void
    {
        if ($cent <= 0) {
            throw new InvalidArgumentException('Der Betrag muss größer als 0 sein.');
        }
    }
}
