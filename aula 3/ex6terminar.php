<?php
$soma = 0;
$cont = 0;
$num = readline ("Digite números para calcular a média (digite 0 para parar): \n");

while ($num !=0) {
     $num = readline(); 
    $soma += $num;
    $cont++;
    $num = (float) readline ();
}

if ($cont > 0) {
    $media = $soma / $cont;
    echo "A média dos $cont números digitados é: $media \n";
} else {
    
}
?>





