<?php

$num1 = readline("Digite o primeiro número: "); 

$num2 = readline("Digite o segundo número: ");

$num3 = readline("Digite o terceiro número: ");

if ($num1 == $num2 && $num2 == $num3) {
    echo "Os três números são iguais: $num1\n";
} elseif ($num1 >= $num2 && $num1 >= $num3) {
    if ($num1 == $num2 || $num1 == $num3) {
        echo "O maior número é $num1 e ele se repete.\n";
    } else {
        echo "O maior número é $num1\n";
    }
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    if ($num2 == $num3) {
        echo "O maior número é $num2 e ele se repete.\n";
    } else {
        echo "O maior número é $num2\n";
    }
} else {
    echo "O maior número é $num3\n";
}
?>
