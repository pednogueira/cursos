<?php

/*
 * Conrato ---- nao pode ter metodos nao abstract
 * Interface nao pode ser instanciada... Apenas define regras 
 * 
 * Quem implementar a inetrface deve programar todos os seus metodos
 */
interface IArquivo {
    
    public function criarArquivo();
    public function escrever($texto);
    public function fechar();
    
}
