<?php
$nums = rand(1, 100);
$tent = 0;

echo "Tente adivinhar o número entre 1 e 100:\n";

while ($nums) {
    $palpite = (int)readline("Digite seu palpite: ");
    $tent++;

    if ($palpite < $nums) {
        echo "O número secreto é maior que $palpite.\n";
    } elseif ($palpite > $nums) {
        echo "O número secreto é menor que $palpite.\n";
    } else {
        echo "Parabéns! Você acertou o número $nums em $tent tentativas.\n";
        
    }
}
?>
