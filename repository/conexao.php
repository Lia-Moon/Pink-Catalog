<?php

class Conexao{
    public static function criar():PDO{ //retorna PDO
        return new PDO("sqlite:filmes.db");
    }
}