<?php

set_include_path(
        get_include_path() . PATH_SEPARATOR . 
        realpath(__DIR__) . "/../model/" . PATH_SEPARATOR . 
        realpath(__DIR__) . "/../persistence/" . PATH_SEPARATOR
);

function __autoload($classeName){
    include_once $classeName . ".php";
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$salario = $_POST["salario"];
$cpf = $_POST["cpf"];

$funcionario = new Funcionario();
$funcionario->setNome($nome);
$funcionario->setEmail($email);
$funcionario->setSalario($salario);
$funcionario->setCpf($cpf);

//var_dump($funcionario);

$funcionario->convertSalario();

$funcionarioDao = new FuncionarioDao();
if($funcionarioDao->cadastrar($funcionario))
    echo "Funcionario cadastrado com sucesso";
else
    echo "Na pode cadastrar o funcionario";