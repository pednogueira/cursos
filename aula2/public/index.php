<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-ui/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="jquery-ui/jquery-ui.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css"
              href="jquery-ui/jquery-ui.css" />

        <script type="text/javascript">
            $(function () {

                //Esconder a div tela
                $("#tela").hide();

                //Quando usuario clicar no botao linkcad
                $("#linkcad").click(function () {
                    //$("#tela").fadeIn(1000);
                    //Mostrar a div tela em formato dialog() (jquery ui)
                    $("#tela").dialog({modal: true});
                });

                //Modificando o link e botao type=submit para transformar em button do jquery ui
                $("#linkcad, :submit").button();
            });
        </script>
    </head>
    <body>

        <h3>Formulário de Funcionário</h3>
        <a href="#" id="linkcad">Cadastrar Funcionario</a>
        
        <div id="tela" title="CADASTRAR FUNCIONARIO">
            <form action="cadastrar.html" method="post">
                Nome..:<br>
                <input type="text" name="nome" id="nome">
                <br><br>
                E-mail..: <br>
                <input type="email" name="email" id="email">
                <br><br>
                Cpf..: <br>
                <input type="text" name="cpf" id="cpf">
                <br><br>
                Salário..: <br>
                <input type="text" name="salario" id="salario">
                <br><br>
                <input type="submit" value="Enviar Dados" id="btn">

            </form>
            <div id="resp"></div>
        </div>

    </body>
</html>
