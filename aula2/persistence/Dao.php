<?php

/*
 * Dao -- Data Access Object -- Objeto de acesso ao banco de dados
 */

class Dao {

    /**
     *
     * @var PDO
     */
    protected $con;

    protected function open() {
        //Ja esta abrinco a conexao com o banco
        $this->con = new PDO("mysql:host=localhost;dbname=aula2", "root", "coti");
    }

}
