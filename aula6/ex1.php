<?php
$alunos = [];

function exibirMenu() {
    echo "\nEscolha uma opção:\n";
    echo "  1. Adicionar aluno e notas\n";
    echo "  2. Listar alunos e médias\n";
    echo "  3. Sair\n";
}

function adicionarAluno(&$alunos) {
    $nome = readline("Digite o nome do aluno: ");
    $notas = [];

    for ($i = 1; $i <= 3; $i++) {
        $nota = (float) readline("Digite a nota $i: ");
        $notas[] = $nota;
    }

    $alunos[] = [
        "nome" => $nome,
        "notas" => $notas
    ];

    echo "Aluno adicionado com sucesso!\n";
}

function listarAlunos($alunos) {
    if (empty($alunos)) {
        echo "Nenhum aluno cadastrado.\n";
    } else {
        echo "\nLista de alunos:\n";
        foreach ($alunos as $aluno) {
            $nome = $aluno["nome"];
            $notas = $aluno["notas"];
            $notasm = implode(", ", $notas);
            $media = array_sum($notas) / count($notas);
            echo "- $nome | Notas: $notasm | Média: " . number_format($media, 2) . "\n";
        }
    }
}

while (true) {
    exibirMenu();
    $opcao = readline("Digite sua opção: ");

    switch ($opcao) {
        case 1:
            adicionarAluno($alunos);
            break;
        case 2:
            listarAlunos($alunos);
            break;
        case 3:
            echo "Saindo do programa.\n";
            exit;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
}
?>
