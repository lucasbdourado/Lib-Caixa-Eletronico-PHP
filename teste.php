<?php
# Um caixa eletrônico tem notas no valor de 100, 50, 5 e 2.
# Considerando um saque no valor de 879 retorne a quantidade necessária de cada nota.

$total = 879;

$notas = [100, 50 , 5, 2];

foreach($notas as $nota){;
    $quantidade = intval($total / $nota);

    $total = $total - ($quantidade * $nota);

    echo $quantidade . PHP_EOL;
}
