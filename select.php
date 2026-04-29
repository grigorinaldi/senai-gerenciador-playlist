<?php

require_once 'crud.php';
print '<table border=1>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Artista</th>
        <th>Tipo</th>
        <th>Tempo</th>
    </tr>';
    $musicas = readAll($pdo, 'musicas');
//print_r($musicas);
foreach($musicas as $musica) {
    echo "<tr>";
    echo "<td>" . $musica['id'] . "</td>";
    echo "<td>" . $musica['titulo'] . "</td>";
    echo "<td>" . $musica['artista'] . "</td>";
    echo "<td>" . $musica['tipo'] . "</td>";
    echo "<td>" . $musica['duracao'] . "</td>";
    echo "</tr>";
}

print '</table>';

$musica = read($pdo, 'musicas');
if ($musica) {
    echo '<p>A música em questão é: '.$musica['titulo'].' </p>';
}