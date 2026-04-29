<?php

require_once 'crud.php';

$novaMusica = [
    'titulo' => 'Don´t Stop Me Now',
    'artista' => 'Queen',
    'tipo' => 'Rock',
    'duracao' => '00:03:29',
];

$idMusicaNova = create($pdo, 'musicas', $novaMusica);
echo 'novo livro inserido com ID: '.$idMusicaNova;