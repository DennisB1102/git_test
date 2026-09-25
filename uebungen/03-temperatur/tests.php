<?php

return [
    '0 °C = 32 °F' => fn () => gleich(32.0, celsiusZuFahrenheit(0)),
    '100 °C = 212 °F' => fn () => gleich(212.0, celsiusZuFahrenheit(100)),
    'Körpertemperatur 37 °C = 98.6 °F' => fn () => gleich(98.6, celsiusZuFahrenheit(37)),
    '-40 ist in beiden Skalen gleich' => fn () => gleich(-40.0, celsiusZuFahrenheit(-40)),
    '32 °F = 0 °C' => fn () => gleich(0.0, fahrenheitZuCelsius(32)),
    '100 °F ≈ 37.8 °C' => fn () => gleich(37.8, fahrenheitZuCelsius(100)),
    'Hypothermie-Grenze 35 °C hin und zurück' => fn () => gleich(35.0, fahrenheitZuCelsius(celsiusZuFahrenheit(35))),
];
