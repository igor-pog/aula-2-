<?php
$numero = (int)readline("Digite um número inteiro para calcular o fatorial: ");

$fatorial = 1;
$i = 1;

do {
 $fatorial = $fatorial * $i;    $i++;
} while ($i <= $numero);

echo "O fatorial de $numero é $fatorial.\n";
?>
