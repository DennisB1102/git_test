<?php

return [
    'leeres Array bei 0' => fn () => gleich([], fizzbuzz(0)),
    'die ersten fünf' => fn () => gleich(['1', '2', 'Fizz', '4', 'Buzz'], fizzbuzz(5)),
    '15 ist FizzBuzz' => fn () => gleich('FizzBuzz', fizzbuzz(15)[14]),
    'richtige Länge' => fn () => gleich(100, count(fizzbuzz(100))),
    '30 ist FizzBuzz, 99 ist Fizz, 100 ist Buzz' => function () {
        $liste = fizzbuzz(100);
        gleich('FizzBuzz', $liste[29]);
        gleich('Fizz', $liste[98]);
        gleich('Buzz', $liste[99]);
    },
];
