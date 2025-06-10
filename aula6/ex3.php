<?php
function apresentarPessoa($nome) {
    echo "Olá, $nome! É um prazer te conhecer.\n";
}

echo "Digite seu nome: ";
$nomes = readline();

apresentarPessoa($nomes);
?>
