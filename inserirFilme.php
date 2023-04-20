<!-- 
print_r($_FILES);

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

?>-->

<?php

// Get values from the form inputs
$titulo = $_POST["titulo"];
$sinopse = $_POST["sinopse"];
$ano = $_POST["ano"];

// Check if the poster input is filled, if yes, store the value in $poster variable
if (!empty($_POST['poster'])) {
    $poster = $_POST['poster'];
} else {
    // If the poster input is not filled, get the file from $_FILES array
    $poster = $_FILES['poster'];
    // Generate a unique filename for the uploaded file
    $poster_name = uniqid() . '.' . pathinfo($poster['name'], PATHINFO_EXTENSION);
    // Set the file path where the file will be saved
    $poster_path = 'posters_imagens/' . $poster_name;
    // Move the uploaded file to the posters_imagens directory with the unique filename
    move_uploaded_file($poster['tmp_name'], $poster_path);
    // Store the path of the saved file in $poster variable
    $poster = $poster_path;
}

// Open a connection to the SQLite database
$bd = new SQLite3('filmes.db');

// Define the SQL query to insert the values into the filmes table
$sql = "INSERT INTO filmes (titulo, poster, sinopse, ano) VALUES (
        '$titulo',
        '$poster',
        '$sinopse',
        $ano
    )";

// Execute the SQL query
if ($bd->exec($sql)) {
    echo "\nFilmes inseridos com sucesso\n";
} else {
    echo "\nErro ao inserir filmes. " . $bs->lastErrorMsg();
}

?>