<?php
require_once 'crud.php';

$id = $_GET['id'];

$musica = read($pdo, 'musicas', "id = $id");
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $musica['id'] ?>">

    <input name="titulo" value="<?= $musica['titulo'] ?>"><br>
    <input name="artista" value="<?= $musica['artista'] ?>"><br>
    <input name="tipo" value="<?= $musica['tipo'] ?>"><br>
    <input name="duracao" value="<?= $musica['duracao'] ?>"><br>

    <button type="submit">Atualizar</button>
</form>