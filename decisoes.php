<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Só entra com 18 anos ou acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade pode entrar sozinho";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Voce esta acompanhado, entao pode entrar";
} else {
    echo "Voce só tem $idade anos, Voce não pode entrar sozinho";
}

echo PHP_EOL;
echo "Adeus";