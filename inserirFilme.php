<?php

// Open a connection to the SQLite database
$bd = new SQLite3('filmes.db');

// Get values from the form inputs
$titulo = $bd->escapeString($_POST["titulo"]);
$sinopse = $bd->escapeString($_POST["sinopse"]);
$ano = $bd->escapeString($_POST["ano"]);

// Check if the poster input is filled, if yes, store the value in $poster variable
if (!empty($_POST['poster'])) {
    $poster = $bd->escapeString($_POST['poster']);
} else {
    // If the poster input is not filled, get the file from $_FILES array
    $poster = $bd->escapeString($_FILES['poster']);
    // Generate a unique filename for the uploaded file
    $poster_name = uniqid() . '.' . pathinfo($poster['name'], PATHINFO_EXTENSION);
    // Set the file path where the file will be saved
    $poster_path = 'posters_imagens/' . $poster_name;
    // Move the uploaded file to the posters_imagens directory with the unique filename
    move_uploaded_file($poster['tmp_name'], $poster_path);
    // Store the path of the saved file in $poster variable
    $poster = $poster_path;
}

// Define the SQL query to insert the values into the filmes table
$sql = "INSERT INTO filmes (titulo, poster, sinopse, ano) 
        VALUES (:titulo, :poster, :sinopse, :ano)";
$stmt = $bd->prepare($sql);
$stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT); //stmt = statement, SQLITE3_TEXT é uma constante para campo de texto //serve para substituir os campos por strings
$stmt->bindValue(':sinopse', $sinopse, SQLITE3_TEXT);
$stmt->bindValue(':ano', $ano, SQLITE3_INTEGER);
$stmt->bindValue(':poster', $poster, SQLITE3_TEXT);
// Execute the SQL query
/* if ($bd->exec($sql)) {
    echo "\nFilmes inseridos com sucesso\n";
} else {
    echo "\nErro ao inserir filmes. " . $bs->lastErrorMsg();
} */

if ($stmt->execute()) {
    echo "\nFilmes inseridos com sucesso\n";
} else {
    echo "\nErro ao inserir filmes. " . $bs->lastErrorMsg();
}

?>