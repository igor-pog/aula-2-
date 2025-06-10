<?php
function converterCelsiusParaFahrenheit($celsius) {
    return $celsius * 1.8 + 32;
}

echo "Digite a temperatura em Celsius: ";
$celsius = (float)readline();

$fahrenheit = converterCelsiusParaFahrenheit($celsius);

echo "Temperatura em Fahrenheit: $fahrenheit °F\n";
?>
