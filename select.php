<?php
require_once 'crud.php';

$musicas = readAll($pdo, 'musicas');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Playlist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Minha Playlist</h1>

<a class="btn" href="create.php">+ Nova Música</a>

<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Artista</th>
        <th>Tipo</th>
        <th>Tempo</th>
        <th>Ações</th>
    </tr>

    <?php foreach($musicas as $musica): ?>
    <tr>
        <td><?= $musica['id'] ?></td>
        <td><?= $musica['titulo'] ?></td>
        <td><?= $musica['artista'] ?></td>
        <td><?= $musica['tipo'] ?></td>
        <td><?= $musica['duracao'] ?></td>
        <td>
            <a href="edit.php?id=<?= $musica['id'] ?>">Editar</a>
            <a href="delete.php?id=<?= $musica['id'] ?>">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>