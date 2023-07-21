<?php

require_once 'Atm\Atm.php';
# PARTE 2
# Crie a lib "Atm" (caixa eletrônico) com classes Atm, Bill (Nota) e Withdraw (Saque).
# Exemplo de uso:
# method chainning

$atm = new \Atm\Atm();

$atm->bill()->addBill(100)->addBill(50)->addBill(5)->addBill(2);

$result = null;
try {
    $result = $atm->withdraw()->ammount(879);
} catch (Throwable $exception) {
    exit($exception);
}

foreach($result as $bill => $quantity){
    echo $quantity.' notas de '.$bill.'<br/>';
}
