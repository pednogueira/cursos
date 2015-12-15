<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="public/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="public/js/jquery.maskedinput.js" type="text/javascript"></script>
        <script>
            $(function () {

                $("#cpf").mask("999.999.999-99");
                //Aceitar telefones com 8 ou 9 digitos
                $("#tel").mask("9999-9999?9");

                $("#btn").click(function () {

                    //Chamar um arquivo do seridor por ajax
                    $.post('inserir.php',
                            {
                                nome: $("#nome").val(),
                                email: $("#email").val(),
                                salario: $("#salario").val(),
                                cpf: $("#cpf").val()
                            },
                    function (dados) {
                        $("#resp").html(dados);
                    }
                    );

                    return false;
                });

                $("#buscar").click(function () {

                    $.post('buscar.php',
                            {
                                nome: $("#nome").val()
                            },
                    function (dados) {
                        $("#resp").html(dados);
                    }
                    );
                    //nao sair da sua pagina
                    return false;
                })

            })
        </script>
    </head>
    <body>
        <h3>Cadastrar Pessoa</h3>

        <form method="post">
            Nome..: 
            <input type="text" name="nome" id="nome">
            <input type="submit" value="Buscar" id="buscar">
            <br><br>
            E-mail..: 
            <input type="text" name="email" id="email">
            <br><br>
            Salario..:
            <input type="text" name="salario" id="salario">
            <br><br>
            Cpf..: 
            <input type="text" name="cpf" id="cpf">
            <br><br>
            <input type="submit" value="Cadastrar Pessoa" id="btn">
        </form>
        <br>
        <div id="resp"></div>
    </body>
</html>
