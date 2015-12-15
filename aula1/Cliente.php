<?php

class Cliente {

    private $nome;
    private $cpf;
    private $sexo;

    //Metodo construtor
    public function __construct() {
        $this->nome = "cliente desconhecido";
        $this->cpf = "000.000.000-00";
        $this->sexo = "n/d";
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function imprmir() {
        echo "<h3>Cliente</h3>";
        echo "Nome..: " . $this->getNome();
        echo "<br>Cpf..: " . $this->getCpf();
        echo "<br>Sexo..: " . $this->getSexo();
    }

}
