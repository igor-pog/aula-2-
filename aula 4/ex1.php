<?php

$lista = [];

while (true) {
    echo "Escolha uma opção\n";
    echo "1. Adicionar item\n";
    echo "2. Remover item\n";
    echo "3. Listar itens\n";
    echo "4. Consultar quantidade\n";
    echo "5. Sair\n";
    echo "Digite sua opção: ";
    $opcao = (int)readline();

switch ($opcao) {
    case 1:
        echo "Digite o nome do item: ";
        $item = readline();
        array_push($lista, $item);
        echo "Item ($item) adicionado com sucesso \n";
        break;
    case 2:
        if (count($lista) > 0) {
            $removido = array_pop($lista);
            echo "Item removido: $removid \n";
        } else {
            echo "A lista está vazia.\n";
        }
        break;
    case 3:
        echo "Lista de itens: \n";
        if (count($lista) > 0) {
            foreach ($lista as $index => $item) {
                echo ($inde + 1) . ". $item \n";
            }
        } else {
            echo "A lista está vazia.\n";
        }
        break;
    case 4:
        echo "Quantidade de itens na lista: " . count($lista) . "\n";
        break;
    case 5:
        echo "Saindo do programa. \n";
        exit;
   
    }
}
?>