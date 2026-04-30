<?php

require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novaMusica = [
        'titulo' => $_POST['titulo'],
        'artista' => $_POST['artista'],
        'tipo' => $_POST['tipo'],
        'duracao' => $_POST['duracao'],
    ];

    create($pdo, 'musicas', $novaMusica);

    header("Location: select.php");
    exit;
}