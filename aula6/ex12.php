<?php

$tarefas = [];

function adicionarTarefa(&$tarefas) {
    echo "Digite o nome da tarefa: ";
    $nome = trim(fgets(STDIN));
    
    echo "Digite a prioridade (alta, média, baixa): ";
    $prioridade = trim(fgets(STDIN));

    $prioridadesValidas = ["alta", "média", "baixa"];

    if (!in_array($prioridade, $prioridadesValidas)) {
        echo "Prioridade inválida! Use alta, média ou baixa (respeitando letras minúsculas).\n";
        return;
    }

    $tarefas[] = [
        'nome' => $nome,
        'prioridade' => $prioridade
    ];

    echo "Tarefa adicionada com sucesso!\n";
}

function removerTarefa(&$tarefas) {
    echo "Digite o nome da tarefa a ser removida: ";
    $nome = trim(fgets(STDIN));
    $encontrada = false;

    foreach ($tarefas as $index => $tarefa) {
        if ($tarefa['nome'] === $nome) {
            unset($tarefas[$index]);
            $tarefas = array_values($tarefas);
            echo "Tarefa removida com sucesso!\n";
            $encontrada = true;
            break;
        }
    }

    if (!$encontrada) {
        echo "Tarefa não encontrada.\n";
    }
}

function listarTarefas($tarefas) {
    if (empty($tarefas)) {
        echo "Nenhuma tarefa cadastrada.\n";
        return;
    }

    echo "Lista de Tarefas:\n";
    $i = 1;
    foreach ($tarefas as $tarefa) {
        echo "$i. {$tarefa['nome']} - Prioridade: {$tarefa['prioridade']}\n";
        $i++;
    }
}

function listarPorPrioridade($tarefas) {
    echo "Digite a prioridade para filtrar (alta, média, baixa): ";
    $prioridade = trim(fgets(STDIN));

    $prioridadesValidas = ["alta", "média", "baixa"];

    if (!in_array($prioridade, $prioridadesValidas)) {
        echo "Prioridade inválida! Use alta, média ou baixa (respeitando letras minúsculas).\n";
        return;
    }

    $filtradas = array_filter($tarefas, function($tarefa) use ($prioridade) {
        return $tarefa['prioridade'] === $prioridade;
    });

    if (empty($filtradas)) {
        echo "Nenhuma tarefa com prioridade $prioridade.\n";
        return;
    }

    echo "Tarefas com prioridade $prioridade:\n";
    $i = 1;
    foreach ($filtradas as $tarefa) {
        echo "$i. {$tarefa['nome']}\n";
        $i++;
    }
}

do {
    echo "\nEscolha uma opção:\n";
    echo "1. Adicionar tarefa\n";
    echo "2. Remover tarefa\n";
    echo "3. Listar todas as tarefas\n";
    echo "4. Listar tarefas por prioridade\n";
    echo "5. Sair\n";
    echo "Digite sua opção: ";

    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            adicionarTarefa($tarefas);
            break;
        case 2:
            removerTarefa($tarefas);
            break;
        case 3:
            listarTarefas($tarefas);
            break;
        case 4:
            listarPorPrioridade($tarefas);
            break;
        case 5:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }

} while ($opcao != 5);

?>
