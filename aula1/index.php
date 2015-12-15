<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 1</title>
    </head>
    <body>
        <?php

        //Metodo chamado sempre que uusairo der NEW em uma classe
        function __autoload($nomeClasse) {
            include_once $nomeClasse . '.php';
        }

        //Para trabalhar com uma classe do php 
        //e necessaro criar um objeto da mesma, instancia
        $p = new Pessoa();

        $p->lerDados("Ana", "ana@gmail.com", 30);
        echo $p->imprimirDados();

        $prod = new Produto();
        $prod->setNome("Camisa");
        $prod->setEstoque(30);
        $prod->setValor(50);

        echo "Produto";
        echo "<br>Nome..: " . $prod->getNome();
        echo "<br>Estoque..: " . $prod->getEstoque();
        echo "<br>Valor..: " . $prod->getValor();


        //Iniciando o construtor da classe
        //Construtor metodo que e chamado no momento que a classe
        //virar objeto (so e chamado uma vez)
        $cliente = new Cliente();

        $cliente->imprmir();

        $cliente->setNome("Jose");
        $cliente->setCpf("123.299.091-22");
        $cliente->setSexo("M");
        $cliente->imprmir();

        $clt = new FuncionarioCLT();
        $pj = new FuncionarioPJ();

        $clt->setNome("Maria");
        $clt->setEmail("maria@gmail.com");
        $clt->setSalario(4500);
        $clt->setDiasFerias(21);

        $pj->setNome("Marcio");
        $pj->setCnpj("11.4548/050");
        $pj->setSalario(5300);
        $pj->setEmail("marcio@ig.com");

        $clt->imprimir();
        echo "<hr>";
        $pj->imprimir();

        echo "<br>CLT: " . $clt->calcSalario();
        echo "<br>PJ: " . $pj->calcSalario();

        //$func = new Funcionario();
        $arquivo = new Arquivo();
        $arquivo->criarArquivo();
        $arquivo->escrever("Teste de Arquivo");
        $arquivo->escrever("Aula 01");
        $arquivo->fechar();

        echo "<p>Arquivo gerado</p>";
        ?>
    </body>
</html>
