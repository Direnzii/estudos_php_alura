<?php

// Exibir os numeres impares de um range, dica: resta da divisao == 0 é par

$primeiroNumero = 0;
$segundoNumero = 10;

for ($primeiroNumero; $primeiroNumero <= $segundoNumero; $primeiroNumero++) {
    if ($primeiroNumero % 2 == 1){
        echo $primeiroNumero . PHP_EOL;
    }
}