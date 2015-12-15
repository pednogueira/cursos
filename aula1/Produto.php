<?php

class Produto {
    
    private $nome;
    private $estoque;
    private $valor;
    
    /*
     * Encapsulamento ---- criar metodos para entrada e saida de 
     * dados de cada atributo
     * 
     * ALT + INSERT --- GETTER AND SETTER
     */
    
    public function getNome() {
        return $this->nome;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    
    /*
    public function teste(){
        $p = new Produto();
        $p->setNome("Camisa")
          ->setEstoque(10)
          ->setValor(50);
    }
     * 
     */

}
