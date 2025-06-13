<?php

$estoque = [];

function adicionarItem(&$estoque) {
    $nome = readline("Digite o nome do item:");
    $quantidade = (int) readline("Digite a quantidade:");

    if (array_key_exists($nome, $estoque)) {
        $estoque[$nome] += $quantidade;
    } else {
        $estoque[$nome] = $quantidade;
    }

    echo "Item adicionado ao estoque!\n";
}

function removerItem(&$estoque) {
    $nome = readline("Digite o nome do item a remover:");

    if (array_key_exists($nome, $estoque)) {
        unset($estoque[$nome]);
        echo "Item removido do estoque.\n";
    } else {
        echo "Item não encontrado no estoque.\n";
    }
}

function listarItens($estoque) {
    echo "Estoque atual:\n";

    if (empty($estoque)) {
        echo "- Nenhum item no estoque.\n";
    } else {
        foreach ($estoque as $item => $quantidade) {
            echo "- $item: $quantidade\n";
        }
    }
}

function consultarTotal($estoque) {
    $total = array_sum($estoque); 
    echo "Quantidade total de itens no estoque: $total\n";
}

while (true) {
    echo "\nEscolha uma opção:\n";
    echo "  1. Adicionar item\n";
    echo "  2. Remover item\n";
    echo "  3. Listar itens\n";
    echo "  4. Consultar quantidade total\n";
    echo " 5. Sair\n";

    $opcao = readline("Digite sua opção: ");

    switch ($opcao) {
        case 1:
            adicionarItem($estoque);
            break;
        case 2:
            removerItem($estoque);
            break;
        case 3:
            listarItens($estoque);
            break;
        case 4:
            consultarTotal($estoque);
            break;
        case 5:
            echo "Saindo do programa.\n";
            exit;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
}
?>
