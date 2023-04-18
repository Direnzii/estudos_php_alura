<?php

// Tipos de erros: Notice, Warning e Erro

require_once 'funcoes.php'; // Require é necessario para o funcionamento do codigo, include não tem a necessidade (_once para verificar se ja nao foi incluido)

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 600
    ]
];

// processar

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.689-11'] = sacar($contasCorrentes['123.456.689-11'], 500);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 600);

//

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf $conta[titular] $conta[saldo]" //Nesse caso há a interpolação, sem a utilização de '' nos index, SÓ FUNCIONA NESSES CASOS
    );
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}" //Já caso há a interpolação, com a utilização de '' nos index, utilizando as {}
    );
}