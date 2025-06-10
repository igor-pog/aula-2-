<?php
function dadosUsuario() {
    echo "Digite seu nome: ";
    $nome = readline();

    echo "Digite seu email: ";
    $email = readline();

    echo "Digite sua cidade: ";
    $cidade = readline();

    return [$nome, $email, $cidade];
}

list($nome, $email, $cidade) = dadosUsuario();

echo "\n Dados do Usuário \n";
echo "Nome: $nome\n";
echo "Email: $email\n";
echo "Cidade: $cidade\n";
?>
