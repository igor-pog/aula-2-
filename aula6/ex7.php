<?php
function triplo($numero) {
    $numero = $numero * 3;
    echo "Dentro da função: $numero\n";
}

echo "Digite um número: ";
$valor = readline();

triplo($valor);

echo "Fora da função: $valor\n";
?>
