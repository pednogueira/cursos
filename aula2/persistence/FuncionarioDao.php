<?php

class FuncionarioDao extends Dao {

    public function gravar(Funcionario $f) {

        $this->open();
        //Iniciar transacao no banco
        $this->con->beginTransaction();

        //Preparar o insert no banco
        $stmt = $this->con->prepare("insert into funcionario values(null,?,?,?,?)");

        $stmt->bindParam(1, $f->getNome());
        $stmt->bindParam(2, $f->getEmail());
        $stmt->bindParam(3, $f->getSalario());
        $stmt->bindParam(4, $f->getCpf());

        //Executar no banco
        $stmt->execute();

        //Confirmar a gravacao
        $this->con->commit();

        return true;
    }

}
