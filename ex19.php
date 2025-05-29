<?php

$valor = readline("Digite o valor do produto (em R$): "); 
$desconto_percentual = readline("Digite o percentual de desconto (%): "); 

$desconto = $valor * ($desconto_percentual / 100);

$valor_f = $valor - $desconto;

echo "Desconto: R$ $desconto \n";
echo "Valor final com desconto: R$ $valor_f \n ";
?>
