<?php

$numero = readline ("Digite um número para ver a sua tabuada: ");

echo "\nTabuada do $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>
