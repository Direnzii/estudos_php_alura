<?php

// Chamada, listagem de cada aluno, como exibir um numero em cada linha, para 15 alunos da turma

$contador = 1;

$executar = 2;

if ($executar == 1){
    while ($contador <= 15) {
        echo "#$contador" . PHP_EOL;
        $contador = $contador + 1;
    }
}

if ($executar == 2){
    for ($contador = 1; $contador <= 15; $contador++) {
        if ($contador == 13){
            continue;
            //break; Quebra o loop
        }
        echo "#$contador" . PHP_EOL;
    }
}