<?php

$peso = readline("Digite o peso em kg: "); 

$altura = readline("Digite a sua altura em metros: "); 

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: $imc "; 

if ($imc < 18.5) {
    echo "Categoria: Abaixo do peso\n";
} elseif ($imc < 25) {
    echo "Categoria: Peso normal\n";
} elseif ($imc < 30) {
    echo "Categoria: Sobrepeso\n";
} else {
    echo "Categoria: Obesidade\n";
}
?>
