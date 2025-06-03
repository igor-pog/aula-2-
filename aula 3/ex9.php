<?php
do {
    $usuario = readline("Digite o nome de usuário: ");

    $senha = readline("Digite a senha: ");

    if ($senha === $usuario) {
        echo "Erro: a senha não pode ser igual ao nome de usuário. Tente novamente.\n";
    }

} while ($senha === $usuario);

echo "Cadastro realizado com sucesso!\n";
?>
