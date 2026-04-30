<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Música</title>
</head>
<body>

<h1>Cadastrar nova música</h1>

<form action="insert.php" method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Artista:</label><br>
    <input type="text" name="artista" required><br><br>

    <label>Tipo:</label><br>
    <input type="text" name="tipo" required><br><br>

    <label>Duração:</label><br>
    <input type="time" name="duracao" step="1" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

<br>
<a href="select.php">Voltar para a lista</a>

</body>
</html>