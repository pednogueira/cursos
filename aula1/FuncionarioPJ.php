<?php

//FuncionarioPJ 'E UM Funcionario
class FuncionarioPJ extends Funcionario {

    private $cnpj;

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    /*
     * sobrescrita do metodo para imprimir
     */

    public function imprimir() {
        //Chamar o metod imprimir() da classe PAI (Funcionario)
        parent::imprimir();
        echo "<h3>Dados de PJ</h3>";
        echo "CNPJ..: " . $this->getCnpj();
    }

    public function calcSalario() {
        return ($this->getSalario() * 0.70 ) + 400;
    }

}
