<?php
function somarNumeros($numero1, $numero2) {
    $soma = $numero1 + $numero2;
    echo "Resultado: $soma\n";
}


echo "Digite o primeiro número: ";
$numero1 = readline();

echo "Digite o segundo número: ";
$numero2 = readline();

somarNumeros($numero1, $numero2);
?>
