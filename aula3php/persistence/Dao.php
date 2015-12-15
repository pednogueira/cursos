<?php

class Dao {
    
    /**
     *
     * @var PDO
     */
    protected $con;
    
    protected function open(){
        $this->con = new PDO("mysql:host=localhost;dbname=aula3", "root", "coti");
        $this->con->beginTransaction();
    }
    
}
