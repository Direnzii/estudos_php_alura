<?php

// Exibir a tabuada de um numero

$numero = 9;

for ($i = 1; $i <= 10; $i++){
    $resultado = $i * $numero;
    echo "$numero x $i = $resultado" . PHP_EOL;
}