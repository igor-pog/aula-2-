<?php

$tarefas = [];


function estaNaLista($valor, $lista) {
    foreach ($lista as $item) {
        if ($item === $valor) {
            return true;
        }
    }
    return false;
}

function adicionarTarefa(&$tarefas) {
    echo "Digite o nome da tarefa: ";
    $nome = trim(fgets(STDIN));
    
    echo "Digite a prioridade (alta, média, baixa): ";
    $prioridade = strtolower(trim(fgets(STDIN)));

    $prioridades_validas = ['alta', 'média', 'baixa'];
    if (!estaNaLista($prioridade, $prioridades_validas)) {
        echo "\nPrioridade inválida. Use alta, média ou baixa.\n";
        return;
    }

    $tarefas[] = [
        'nome' => $nome,
        'prioridade' => $prioridade
    ];
    echo "\nTarefa adicionada com sucesso!\n";
}

function removerTarefa(&$tarefas) {
    echo "Digite o nome da tarefa a ser removida: ";
    $nome = trim(fgets(STDIN));

    foreach ($tarefas as $index => $tarefa) {
        if ($tarefa['nome'] === $nome) {
            unset($tarefas[$index]);
            echo "\nTarefa removida com sucesso!\n";
            return;
        }
    }
    echo "Tarefa não encontrada.\n";
}

function listarTodasTarefas($tarefas) {
    if (empty($tarefas)) {
        echo "\nNenhuma tarefa cadastrada.\n";
        return;
    }

    echo "Lista de Tarefas:\n";
    $contador = 1;
    foreach ($tarefas as $tarefa) {
        echo "$contador. {$tarefa['nome']} - Prioridade: {$tarefa['prioridade']}\n";
        $contador++;
    }
}

function listarPorPrioridade($tarefas) {
    echo "Digite a prioridade para filtrar (alta, média, baixa): ";
    $filtro = strtolower(trim(fgets(STDIN)));

    $prioridades_validas = ['alta', 'média', 'baixa'];
    if (!estaNaLista($filtro, $prioridades_validas)) {
        echo "\nPrioridade inválida. Use alta, média ou baixa.\n";
        return;
    }

    $filtradas = array_filter($tarefas, function($tarefa) use ($filtro) {
        return $tarefa['prioridade'] === $filtro;
    });

    if (empty($filtradas)) {
        echo "\nNenhuma tarefa com prioridade $filtro.\n";
        return;
    }

    echo "\nTarefas com prioridade $filtro:\n";
    $contador = 1;
    foreach ($filtradas as $tarefa) {
        echo "$contador. {$tarefa['nome']}\n";
        $contador++;
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
            listarTodasTarefas($tarefas);
            break;
        case 4:
            listarPorPrioridade($tarefas);
            break;
        case 5:
            echo "Saindo do programa...\n";
            break;
      
    }

} while ($opcao != 5);
?>
