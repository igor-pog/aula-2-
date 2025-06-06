<?php
$estoque = [];
while (true) {
    echo "\nEscolha uma opção:\n";
    echo "  1. Adicionar item\n";
    echo "  2. Remover item\n";
    echo "  3. Listar itens\n";
    echo "  4. Consultar quantidade total\n";
    echo "  5. Sair\n";
    $opcao = readline("Digite sua opção: ");
switch ($opcao) {
    case 1:
       $nome = readline("Digite o nome do item:\n");
            $quantidade = (int) readline("Digite a quantidade:\n");

            if (array_key_exists($nome, $estoque)) {
                $estoque[$nome] += $quantidade;
            } else {
                $estoque[$nome] = $quantidade;
            }

            echo "Item adicionado ao estoque!\n";
            break;
    case 2:
        $nome = readline(" Digite o nome do item a remover: \n");
            if (array_key_exists($nome, $estoque)) {
                unset($estoque[$nome]);
                echo " Item removido do estoque.\n";
            } else {
                echo " Item não encontrado no estoque.\n";
            }
            break;
    case 3: 
        echo " Estoque atual:\n";
            if (empty($estoque)) {
                echo " - Nenhum item no estoque.\n";
            } else {
                foreach ($estoque as $item => $quantidade) {
                    echo "- $item: $quantidade\n";
                }
            }
            break;
    case 4:
        $total = array_sum($estoque);
            echo "\n Quantidade total de itens no estoque: $total\n";
            break;
    case 5: 
        echo "\n saindo do programa.\n";
        exit;

    }
}
?>