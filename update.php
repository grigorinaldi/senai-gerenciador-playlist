<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];

    $dadosAtualizados = [
        'titulo' => $_POST['titulo'],
        'artista' => $_POST['artista'],
        'tipo' => $_POST['tipo'],
        'duracao' => $_POST['duracao'],
    ];

    update($pdo, 'musicas', $dadosAtualizados, "id = $id");

    header("Location: select.php");
    exit;
}