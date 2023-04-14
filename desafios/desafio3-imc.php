<?php

//calcular o imc  --   peso * altura²

$peso = 91;
$altura = 1.73;

$imc = $peso / ($altura**2);

echo $imc . PHP_EOL;

if ($imc < 18.4){
    echo "Abaixo do peso";
} elseif ($imc < 24.9 && $imc > 18.5) {
    echo "Peso normal";
} elseif ($imc < 29.9 && $imc > 25){
    echo "Acima do peso";
} elseif ($imc < 34.9 && $imc > 30){
    echo "Obesidade grau I";
} elseif ($imc < 40 && $imc > 35){
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}