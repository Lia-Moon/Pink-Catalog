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

// Open a connection to the SQLite database
//$bd = new SQLite3('filmes.db');

require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";

$filmesRepository = new FilmesRepositoryPDO();
$filme = new Filme();

// Get values from the form inputs
$filme->titulo = $_POST["titulo"];
$filme->sinopse = $_POST["sinopse"];
$filme->ano = $_POST["ano"];

// Check if the poster input is filled, if yes, store the value in $poster variable
if (!empty($_POST["poster"])) {
    $filme->poster = $_POST["poster"];
} else {
    // If the poster input is not filled, get the file from $_FILES array
    $poster = $_FILES["poster"];
    if ($poster['error'] === UPLOAD_ERR_OK) {
        // Generate a unique filename for the uploaded file
        $poster_name = uniqid() . '.' . pathinfo($poster['name'], PATHINFO_EXTENSION);
        // Set the file path where the file will be saved
        $poster_path = 'posters_imagens/' . $poster_name;
        // Move the uploaded file to the posters_imagens directory with the unique filename
        move_uploaded_file($poster['tmp_name'], $poster_path);
        // Store the path of the saved file in $poster variable
        $filme->poster = $poster_path;
    }
}

//$poster = $poster; // Add this line

// Execute the SQL query
if ($filmesRepository->salvar($filme)) {
    echo "\nFilmes inseridos com sucesso\n";
} else {
    echo "\nErro ao inserir filmes. " . $bd->lastErrorMsg();
}

header("Location: galeria.php?msg=Filme+cadastrado+com+sucesso");

?>