<?php

$url = isset($_GET["url"]) ? $_GET["url"] : "index";

$paginas = explode("/", $url);
//var_dump($paginas);
if (isset($paginas[0]) && file_exists("public/" . $paginas[0] . ".php")) {
    $pagina = "public/" . $paginas[0] . ".php";
} else {
    $pagina = "public/index.php";
}

include_once $pagina;
?>