<?php
function verificarMaioridade($idade) {
    return ($idade >= 18);
}

echo "Digite sua idade: ";
$idade = (int)readline();

if (verificarMaioridade($idade)) {
    echo "Maior de idade\n";
} else {
    echo "Menor de idade\n";
}
?>
