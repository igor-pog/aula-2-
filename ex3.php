<?php
for ($i = 1; $i <= 5; $i++) {
    $numero = readline ("Digite o $i número: ") ;
    
    if ($i == 1 || $numero > $maior) {
        $maior = $numero;
    }
}

echo "O maior número digitado foi: $maior\n";
?>
