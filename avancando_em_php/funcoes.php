<?php

function exibeMensagem($mensagem)  // subrotina, não retorna nada
{
    echo $mensagem . PHP_EOL;
}
function sacar(array $conta, float $valor): array  // função, recebe array e float e retorna algo
{
    if ($conta['saldo'] < $valor) {
        exibeMensagem('Voce não tem credito');
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}
function depositar(array $conta, float $valorAdepositar): array  // função ||
{
    if ($valorAdepositar > 0) {
        $conta['saldo'] += $valorAdepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos !!");
    }
    return $conta;
}