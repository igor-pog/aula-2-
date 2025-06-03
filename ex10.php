<?php
do {
    echo "\nMenu de Opções:\n";
    echo "  1 - Exibir 'Olá, Mundo!'\n";
    echo "  2 - Exibir a data atual\n";
    echo "  3 - Calcular a soma de dois números\n";
    echo "  4 - Sair\n";
    $opcao = (int)readline("Escolha uma opção (1-4): ");

    switch ($opcao) {
        case 1:
            echo "Olá, Mundo!\n";
            break;
        case 2:
	    $data = date('d/m/Y');
            echo "Data atual: " . date("d/m/Y") . "\n";
            break;
        case 3:
            $num1 = (float)readline("Digite o primeiro número: ");
            $num2 = (float)readline("Digite o segundo número: ");
            $soma = $num1 + $num2;
            echo "A soma de $num1 e $num2 é: $soma\n";
            break;
        case 4:
            echo "Saindo do programa.\n";
            break;
       
    }
} while ($opcao != 4);
?>
