<?php

declare(strict_types=1);

/** @return list<string> */
function fizzbuzz(int $bis): array
{
    $ergebnis = [];
    for ($i = 1; $i <= $bis; $i++) {
        $ergebnis[] = match (true) {
            $i % 15 === 0 => 'FizzBuzz',
            $i % 3 === 0 => 'Fizz',
            $i % 5 === 0 => 'Buzz',
            default => (string) $i,
        };
    }

    return $ergebnis;
}
