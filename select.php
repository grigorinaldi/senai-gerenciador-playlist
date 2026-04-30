<?php
require_once 'crud.php';

$musicas = readAll($pdo, 'musicas');

print '<table border=1>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Artista</th>
        <th>Tipo</th>
        <th>Tempo</th>
        <th>Ações</th>
    </tr>';

foreach($musicas as $musica) {
    echo "<tr>";
    echo "<td>" . $musica['id'] . "</td>";
    echo "<td>" . $musica['titulo'] . "</td>";
    echo "<td>" . $musica['artista'] . "</td>";
    echo "<td>" . $musica['tipo'] . "</td>";
    echo "<td>" . $musica['duracao'] . "</td>";

    echo "<td>
        <a href='edit.php?id=" . $musica['id'] . "'>Editar</a>
    </td>";

    echo "</tr>";
}

print '</table>';