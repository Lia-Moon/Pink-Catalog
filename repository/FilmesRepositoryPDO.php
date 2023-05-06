<?php

class FilmesRepositoryPDO{
    public function listarTodos():array{
        $bd = Conexao::criar();
        $filmesLista = array();

        $sql = "SELECT * FROM filmes";
        $filmes = $bd->query($sql); //A função query retorna um conjunto de dados
        while ($filme = $filmes->fetch(PDO::FETCH_ASSOC)){
            array_push($filmesLista, $filmesLista);
        }
        return $filmesLista;
    }

    public function salvar(Filme $filme):bool {
        return false;
    }
}