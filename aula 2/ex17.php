<?php

$nota1 = readline("Digite a primeira nota: "); 

$nota2 = readline("Digite a primeira nota: "); 

$media = ($nota1 + $nota2) / 2;

  if ($media >= 7) {
    echo "Média: $media - Aprovado\n";
} elseif ($media >= 5 && $media < 7) {
    echo "Média: $media - Recuperação\n";
} else {
    echo "Média: $media - Reprovado\n";
}
?>
