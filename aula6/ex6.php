<?php
function dobrar(&$numero) {
    $numero = $numero * 2;
    echo "Dentro da função: $numero\n";
}

echo "Digite um número: ";
$valor = readline();

dobrar($valor);

echo "Fora da função: $valor\n";
?>
