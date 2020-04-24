<?php

//um formulario se transforma em array associativo quando enviado via url
/*print_r($_GET);

echo "<br><hr>";
echo $email = $_GET["email"];
echo "<br>";
echo $senha = $_GET["senha"];
*/

//Metodo post envita que os dados enviado por formulario sejam visto na url do navegador.
print_r($_POST);

echo "<br><hr>";

echo $email = $_POST["email"];
echo "<br>";
echo $senha = $_POST["senha"];
?>