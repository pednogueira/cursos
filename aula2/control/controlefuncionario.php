<?php

//Definir caminhos onde o php devera procurar os arquivos inclusos
set_include_path(
        get_include_path() . PATH_SEPARATOR .
        realpath(__DIR__) . "/../model/" . PATH_SEPARATOR .
        realpath(__DIR__) . "/../persistence/" . PATH_SEPARATOR
);

function __autoload($classe) {
    include_once $classe . '.php';
}

$funcionario = new Funcionario();
$funcionarioDao = new FuncionarioDao();

$funcionario->setNome($_POST["nome"]);
$funcionario->setEmail($_POST["email"]);
$funcionario->setCpf($_POST["cpf"]);
$funcionario->setSalario($_POST["salario"]);

if ($funcionarioDao->gravar($funcionario))
    echo "Funcionario cadastrado com sucesso!";
else
    echo "Nao pode cadastrar o funcionario";