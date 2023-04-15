<?php

$tabuleiro = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' ']
];

$current_player = 'X';

while (!check_game_over($tabuleiro)) {
    print_board($tabuleiro);
    echo "É a vez do jogador $current_player.\n";
    $row = readline('Digite a linha (0-2): ');
    $col = readline('Digite a coluna (0-2): ');
    if (make_move($tabuleiro, $row, $col, $current_player)) {
        if ($current_player == 'X') {
            $current_player = 'O';
        } else {
            $current_player = 'X';
        }
    } else {
        echo "Movimento inválido. Tente novamente.\n";
    }
}

print_board($tabuleiro);
echo "Fim de jogo.\n";

function print_board($tabuleiro) {
    echo "\n";
    echo " {$tabuleiro[0][0]} | {$tabuleiro[0][1]} | {$tabuleiro[0][2]} \n";
    echo "-----------\n";
    echo " {$tabuleiro[1][0]} | {$tabuleiro[1][1]} | {$tabuleiro[1][2]} \n";
    echo "-----------\n";
    echo " {$tabuleiro[2][0]} | {$tabuleiro[2][1]} | {$tabuleiro[2][2]} \n";
    echo "\n";
}

function make_move(&$tabuleiro, $row, $col, $player) {
    if ($tabuleiro[$row][$col] == ' ') {
        $tabuleiro[$row][$col] = $player;
        return true;
    }
    return false;
}

function check_game_over($tabuleiro) {
    // Verificar se alguém ganhou na horizontal
    for ($i = 0; $i < 3; $i++) {
        if ($tabuleiro[$i][0] != ' ' && $tabuleiro[$i][0] == $tabuleiro[$i][1] && $tabuleiro[$i][0] == $tabuleiro[$i][2]) {
            return true;
        }
    }
    // Verificar se alguém ganhou na vertical
    for ($j = 0; $j < 3; $j++) {
        if ($tabuleiro[0][$j] != ' ' && $tabuleiro[0][$j] == $tabuleiro[1][$j] && $tabuleiro[0][$j] == $tabuleiro[2][$j]) {
            return true;
        }
    }
    // Verificar se alguém ganhou na diagonal
    if ($tabuleiro[0][0] != ' ' && $tabuleiro[0][0] == $tabuleiro[1][1] && $tabuleiro[0][0] == $tabuleiro[2][2]) {
        return true;
    }
    if ($tabuleiro[0][2] != ' ' && $tabuleiro[0][2] == $tabuleiro[1][1] && $tabuleiro[0][2] == $tabuleiro[2][0]) {
        return true;
    }
    // Verificar se não há mais jogadas possíveis
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($tabuleiro[$i][$j] == ' ') {
                return false;
            }
        }
    }
    return true;
}