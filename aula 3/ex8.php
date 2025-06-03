<?php
$numero = (int)readline("Digite um número inteiro para calcular o fatorial: ");

$fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {
 $fatorial = $fatorial * $i;}

echo "O fatorial de $numero é $fatorial.\n";
?>
