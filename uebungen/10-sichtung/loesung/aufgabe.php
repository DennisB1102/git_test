<?php

declare(strict_types=1);

enum Sichtungskategorie: int
{
    case SK1 = 1;
    case SK2 = 2;
    case SK3 = 3;
    case SK4 = 4;

    public function farbe(): string
    {
        return match ($this) {
            self::SK1 => 'rot',
            self::SK2 => 'gelb',
            self::SK3 => 'grün',
            self::SK4 => 'blau',
        };
    }
}

class Patient
{
    public function __construct(
        public readonly string $kennung,
        public readonly Sichtungskategorie $kategorie,
        public readonly DateTimeImmutable $gesichtetUm,
    ) {
    }
}

class Sichtungsliste
{
    /** @var array<string, Patient> */
    private array $patienten = [];

    public function hinzufuegen(Patient $patient): void
    {
        if (isset($this->patienten[$patient->kennung])) {
            throw new InvalidArgumentException("Kennung {$patient->kennung} ist bereits vergeben.");
        }
        $this->patienten[$patient->kennung] = $patient;
    }

    /** @return list<Patient> */
    public function sortiert(): array
    {
        $liste = array_values($this->patienten);
        usort($liste, fn (Patient $a, Patient $b) =>
            [$a->kategorie->value, $a->gesichtetUm] <=> [$b->kategorie->value, $b->gesichtetUm]);

        return $liste;
    }

    /** @return array<string, int> */
    public function anzahlJeKategorie(): array
    {
        $anzahl = array_fill_keys(array_map(fn ($k) => $k->name, Sichtungskategorie::cases()), 0);
        foreach ($this->patienten as $patient) {
            $anzahl[$patient->kategorie->name]++;
        }

        return $anzahl;
    }

    public function umsichten(string $kennung, Sichtungskategorie $neu): void
    {
        $alt = $this->patienten[$kennung]
            ?? throw new OutOfBoundsException("Unbekannte Kennung: {$kennung}");

        $this->patienten[$kennung] = new Patient($alt->kennung, $neu, $alt->gesichtetUm);
    }
}
