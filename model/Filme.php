<?php

class Filme {

    /** @var int $id*/
    public $id;

    /** @var string $titulo*/
    public $titulo;

    /** @var string $sinopse*/
    public $sinopse;

    /** @var int $ano*/ //Aqui eu alterei float para int pois eu utilizo SQLITE3_INTEGER no arquivo inserirFilme.php
    public $ano;

    /** @var string $poster*/
    public $poster;
}