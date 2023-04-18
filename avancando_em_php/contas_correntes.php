<?php

$contaCorrente = [
    112233 => [
        'titular' => 'Thiago',
        'saldo' => 5000
    ],
    223344 => [
        'titular' => 'Henrique',
        'saldo' => 1500
    ],
    334455 => [
        'titular' => 'Zé',
        'saldo' => 600
    ]
    ];

$contaCorrente[556677] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach (@$contaCorrente as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}