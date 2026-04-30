<?php

require_once 'crud.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    delete($pdo, 'musicas', "id = $id");
}

header("Location: select.php");
exit;