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
    5658989 => $conta1, 
    7844545 => $conta2, 
    1212332 => $conta3
];


foreach($contaCorrente as $conta){
    echo $conta['titular'] . PHP_EOL;
}