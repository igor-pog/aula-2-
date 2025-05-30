<?php
// Solicita os dois limites do intervalo
$limite1 = readline ("Digite o primeiro número (limite inf): ");
$limite2 = readline ("Digite o primeiro número (limite sp): ");

if ($limite1 > $limite2) {
    $limite1 = $limite2;
}

$quantidade_pares = 0;

for ($i = $limite1; $i <= $limite2; $i++) {
    if ($i % 2 == 0) {
        $quantidade_pares++;
    }
}

echo "Quantidade de números pares entre $limite1 e $limite2: $quantidade_pares\n";
?>
