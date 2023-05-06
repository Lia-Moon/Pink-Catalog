<?php

require "conexao.php";

class FilmesRepositoryPDO{

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::criar();    
    }

    public function listarTodos():array{
        $filmesLista = array();

        $sql = "SELECT * FROM filmes";
        $filmes = $this->conexao->query($sql); //A função query retorna um conjunto de dados
        while ($filme = $filmes->fetchObject()) {
            array_push($filmesLista, $filme);
        }
        return $filmesLista;
    }

    public function salvar(Filme $filme):bool {
        // Define the SQL query to insert the values into the filmes table
        $sql = "INSERT INTO filmes (titulo, poster, sinopse, ano) 
        VALUES (:titulo, :poster, :sinopse, :ano)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':titulo', $filme->titulo, PDO::PARAM_STR); //stmt = statement, PDO::PARAM_STR é uma constante para campo de texto //serve para substituir os campos por strings
        $stmt->bindValue(':sinopse', $filme->sinopse, PDO::PARAM_STR);
        $stmt->bindValue(':ano', $filme->ano, PDO::PARAM_STR);
        $stmt->bindValue(':poster', $filme->poster, PDO::PARAM_STR);

        return $stmt->execute();
    }
}
