<?php

$conta1 = [
    'titular' => 'Thiago',
    'saldo' => 5000
];
$conta2 = [
    'titular' => 'Henrique',
    'saldo' => 1500
];
$conta3 = [
    'titular' => 'Zé',
    'saldo' => 600
];


$contaCorrente = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrente); $i++){
    echo $contaCorrente[$i]['titular'] . PHP_EOL;
}