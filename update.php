<?php
require_once 'crud.php';

$idMusica = 3;

$dadosAtualizados = [
    'titulo' => 'The Less I Know Better',
    'artista' => 'Tame Impala',
    'tipo' => 'Rock psicodélico',
    'duracao' => '00:07:38',
];

$linhasAfetadas = update($pdo, 'musicas', $dadosAtualizados, "id = $idMusica");

if ($linhasAfetadas > 0){
    echo "Música atualizada com sucesso!" . $linhasAfetadas;
} else {
    echo "Não foi possível atualizar a música!";
}