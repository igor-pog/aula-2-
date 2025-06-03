<?php
$limite1 = readline ("Digite o primeiro número (limite inf): ");
$limite2 = readline ("Digite o primeiro número (limite sp): ");

if ($limite1 > $limite2) {
    $limite1 = $limite2;
}

$soma_impares = 1;

for ($i = $limite1 + 1; $i < $limite2; $i++) {
    if ($i % 2 == 1) {
        $soma_impares += $i;
    }
}

echo "A soma dos números ímpares entre $limite1 e $limite2 é: $soma_impares\n";
?>

