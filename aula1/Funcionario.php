<?php

/*
 * abstract --- faz com que a classe nao possa ser instanciada... ela deve ser herdada
 * nao pode dar new
 */
abstract class Funcionario {

    /*
     * Encapsulamento
     */
    private $nome;
    private $email;
    private $salario;
    
    //A classe que herdar de Funcionario deve criar este metodo
    public abstract function calcSalario();
    
    /*
     * Metodo de retorno
     */
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSalario() {
        return $this->salario;
    }

    /*
     * Metodo de entrada
     */
    public function setNome($nome) {
        $this->nome = strtoupper($nome);
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSalario($salario) {
        if($salario < 0)
            $salario = 0;
        $this->salario = $salario;
    }

    public function imprimir(){
        echo "<h3>Dados de Funcionario</h3>";
        echo "Nome..: " . $this->getNome();
        echo "<br>Salario..: " . $this->getSalario();
        echo "<br>Email..: " . $this->getEmail();
    }
    
    
}
