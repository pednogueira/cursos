<?php

class FuncionarioDao extends Dao{
   
    public function cadastrar(Funcionario $f){
        $this->open();
        
        $stmt = $this->con->prepare("insert into funcionario values(NULL,?,?,?,?)");
        
        $stmt->bindParam(1, $f->getNome());
        $stmt->bindParam(2, $f->getCpf());
        $stmt->bindParam(3, $f->getEmail());
        $stmt->bindParam(4, $f->getSalario());
        
        $stmt->execute();
        
        $this->con->commit();
        
        return true;
        
    }
    
    public function buscar($nome){
        $this->open();
        
        $stmt = $this->con->prepare("select * from funcionario where nome like ?");
        $stmt->bindParam(1, $nome);
        $lista = array();
        if($stmt->execute()){
            while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
                $f = new Funcionario();
                $f->setId($rs->id);
                $f->setNome($rs->nome);
                $f->setEmail($rs->email);
                $f->setSalario($rs->salario);
                $f->setCpf($rs->cpf);
                
                $lista[] = $f;
            }
        }
        
        return $lista;
    }
    
}
