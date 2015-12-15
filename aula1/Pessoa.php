<?php

class Pessoa {
    /*
     * Atributos --- Variavel da classe
     * 
     * Qualificador de acesso --- Qualificador que permite a utilizacao 
     * do atributo ou metodo em outros arquivos
     * 
     * private      ( - ) -- So utilizado na propria classe 
     * protected    ( # ) -- So e utilizado na propria classe e nas suas herancas
     * public       ( + ) -- E utilizado em qualquer classe (arquivo)
     */
    private $nome;
    private $email;
    private $idade;
    
    /*
     * Metodos --- Subprograma, pequena rotina (funcionalidade da classe)
     */
    public function lerDados($nome,$email, $idade){
        /*
         * $this--> Referencia da classe
         */
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
    }
    
    //Metdo com retorno
    public function imprimirDados(){
        return $this->nome . ", ". $this->email . ", ". $this->idade;
    }
}
