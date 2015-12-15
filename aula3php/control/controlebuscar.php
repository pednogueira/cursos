<?php

set_include_path(
        get_include_path() . PATH_SEPARATOR .
        realpath(__DIR__) . "/../model/" . PATH_SEPARATOR .
        realpath(__DIR__) . "/../persistence/" . PATH_SEPARATOR
);

function __autoload($classeName) {
    include_once $classeName . ".php";
}

$nome = $_POST["nome"];

$funcionarioDao = new FuncionarioDao();
$dados = $funcionarioDao->buscar($nome . "%");

//var_dump($dados);
if (count($dados) > 0) {
    foreach ($dados as $f) {
        echo $f->getNome() . " ---- " . $f->getCpf();
        echo "<br>";
    }
}