<?php

echo $_SERVER["SERVER_NAME"]; //Retornar o caminho do servidor
echo "<br>";
echo $_SERVER["SERVER_PORT"];//Porta do servidor
echo "<br>";
echo $_SERVER["REQUEST_URI"];//Caminho de pastas

$caminho = "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].
        $_SERVER["REQUEST_URI"]."public/";

?>
<meta http-equiv="refresh" content="0;URL=<?php echo $caminho; ?>">