<?php

declare(strict_types=1);

function celsiusZuFahrenheit(float $celsius): float
{
    return round($celsius * 9 / 5 + 32, 1);
}

function fahrenheitZuCelsius(float $fahrenheit): float
{
    return round(($fahrenheit - 32) * 5 / 9, 1);
}
