<?php

$numero = readline ("Digite um número para ver a sua tabuada: ");

$i = 1;


    echo "\nTabuada do $numero:\n";
    
    while ($i <= 10) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
    $i++;
}
?>
