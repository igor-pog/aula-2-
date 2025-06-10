<?php
function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

echo "Digite a largura (em metros): ";
$largura = (float)readline();

echo "Digite a altura (em metros): ";
$altura = (float)readline();

$area = calcularAreaRetangulo($largura, $altura);

echo "Área do retângulo: $area m²\n";
?>
