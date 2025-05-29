<?php
do {
$opcao = readline ("Escolha uma opção: 1, 2, 3 ou 4 para sair. ");
switch ( $opcao){
 case 1: 
 $num1 = readline("Digite o primeiro número: "); 

 $num2 = readline("Digite o segundo número: ");
 $valor = $num1 + $num2 ;
echo " Valor da soma é: $valor. \n";
case 2:
 $num1 = readline("Digite o primeiro número: "); 

 $num2 = readline("Digite o segundo número: ");
 $valor = $num1 - $num2 ;
echo " Valor da soma é: $valor. \n";
case 3:
$num = readline("Digite um número: "); 
 if ($num % 2 == 0 ) {
    echo "O número $num é Par. \n";
} else {
    echo "O número $num é Impar. \n";
}
 case 4: 
	echo "Saindo do programa...\n";
            break;
}
} while ($opcao != 4);

?>

