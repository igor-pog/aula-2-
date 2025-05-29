<?php
$peso = readline("Digite seu peso (kg): "); 
$altura = readline("Digite a sua altura (m): "); 

$alturaqua = $altura * $altura ;
$IMC = $peso / $alturaqua;
echo " Seu IMC é= $IMC "; 

?>

