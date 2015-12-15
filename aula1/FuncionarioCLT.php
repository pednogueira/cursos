<?php

class FuncionarioCLT extends Funcionario{
    
    private $diasFerias;
    
    public function getDiasFerias() {
        return $this->diasFerias;
    }

    public function setDiasFerias($diasFerias) {
        $this->diasFerias = $diasFerias;
    }

    public function imprimir(){
        parent::imprimir();
        echo "<h3>CLT</h3>";
        echo "Dias de ferias..: " . $this->getDiasFerias();
    }

    public function calcSalario() {
        if($this->getSalario() < 1500){
            return $this->getSalario () * 0.91;
        }elseif($this->getSalario() < 3000){
            return $this->getSalario () * 0.82;
        }else{
            return $this->getSalario () * 0.75;
        }
    }

}
