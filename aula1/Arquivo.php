<?php

class Arquivo implements IArquivo {

    private $arq;

    public function criarArquivo() {
        $this->arq = fopen("banco.txt", "a+");
    }

    public function escrever($texto) {
        fwrite($this->arq, $texto);
        fwrite($this->arq, "\n");
    }

    public function fechar() {
        fclose($this->arq);
    }

}
