<?php

require_once '../config/Database.php';

class Anuncios{

    public function listar_anuncios()
    {
        $bd = new Database();
        $anuncios = $bd->select("SELECT *FROM anuncios");

        return $anuncios;
    }
}