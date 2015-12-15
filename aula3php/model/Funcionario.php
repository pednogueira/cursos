<?php
class Funcionario {
    
    private $id;
    private $nome;
    private $email;
    private $salario;
    private $cpf;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }


    public function convertSalario($typeIn = true){
        //4500,50
        if($typeIn == true){
            $this->salario = str_replace(",", ".", $this->salario);
        }else{
            $this->salario = str_replace(".", ",", $this->salario);
        }
    }
}
