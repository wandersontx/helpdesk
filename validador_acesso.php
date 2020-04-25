<?php
//caso usuario não esteja auttenciado, retonar a pagina index.php exibindo erro ao usuario.
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
header('Location: index.php?login=erro2');

}

?>