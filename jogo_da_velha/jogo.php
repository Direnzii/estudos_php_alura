<?php

session_start();

$tabuleiro = [
    array('', '', ''),
    array('', '', ''),
    array('', '', '')
];

function display_board($tabuleiro) {
    echo '<table>';
    for ($row = 0; $row < 3; $row++) {
        echo '<tr>';
        for ($col = 0; $col < 3; $col++) {
            echo '<td>' . $tabuleiro[$row][$col] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

function is_game_over($tabuleiro) {
    for ($row = 0; $row < 3; $row++) {
        if ($tabuleiro[$row][0] != '' && $tabuleiro[$row][0] == $tabuleiro[$row][1] && $tabuleiro[$row][1] == $tabuleiro[$row][2]) {
            return true;
        }
    }

    for ($col = 0; $col < 3; $col++) {
        if ($tabuleiro[0][$col] != '' && $tabuleiro[0][$col] == $tabuleiro[1][$col] && $tabuleiro[1][$col] == $tabuleiro[2][$col]) {
            return true;
        }
    }

    if ($tabuleiro[0][0] != '' && $tabuleiro[0][0] == $tabuleiro[1][1] && $tabuleiro[1][1] == $tabuleiro[2][2]) {
        return true;
    }

    if ($tabuleiro[0][2] != '' && $tabuleiro[0][2] == $tabuleiro[1][1] && $tabuleiro[1][1] == $tabuleiro[2][0]) {
        return true;
    }

    return false;
}

function start_game() {
    $_SESSION['board'] = array(
        array('', '', ''),
        array('', '', ''),
        array('', '', '')
    );
    $_SESSION['current_player'] = 'X';
}

function play_game() {
    $tabuleiro = $_SESSION['board'];
    $current_player = $_SESSION['current_player'];

    $row = $_GET['row'];
    $col = $_GET['col'];

    if ($tabuleiro[$row][$col] != '') {
        echo 'This square has already been played. Please choose another.';
        return;
    }

    $tabuleiro[$row][$col] = $current_player;

    if (is_game_over($tabuleiro)) {
        echo '<h1>Game over! ' . $current_player . ' wins!</h1>';
        start_game();
        return;
    }

    if ($current_player == 'X') {
        $_SESSION['current_player'] = 'O';
    } else {
        $_SESSION['current_player'] = 'X';
    }

    $_SESSION['board'] = $tabuleiro;

    display_board($tabuleiro);
}

if (!isset($_SESSION['board'])) {
    start_game();
}

if (isset($_GET['row']) && isset($_GET['col'])) {
    play_game();
} else {
    display_board($_SESSION['board']);
}