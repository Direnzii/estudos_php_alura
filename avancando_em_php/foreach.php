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

$contaCorrente = [
    $conta1, 
    $conta2, 
    $conta3
];


foreach($contaCorrente as $conta){
    echo $conta['titular'] . PHP_EOL;
}