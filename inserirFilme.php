<?php

$titulo = $_POST["titulo"];
$sinopse = $_POST["sinopse"];
$ano = $_POST["ano"];
$poster = $_POST["poster"];

$bd = new SQLite3('filmes.db');

$sql = "INSERT INTO filmes (titulo, poster, sinopse, ano) VALUES (
        '$titulo',
        '$poster',
        '$sinopse',
        $ano
    )";

if ($bd->exec($sql))
    echo "\nFilmes inseridos com sucesso\n";
else
    echo "\nErro ao inserir filmes. ". $bs->lastErrorMsg();

?>