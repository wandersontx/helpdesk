<?php

//instancia de um session que serve para comunicação do servidor com cliente (browser)
 session_start();
$_SESSION;



$usuario_autenticado = false; 

$email = $_POST["email"];
$senha = $_POST["senha"];

	$usuario_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
		array('email' => 'wanderson@gmail.com', 'senha' => '99')
	);
	

	foreach($usuario_app as $user){
		if($user['email'] == $email && $user['senha'] == $senha){
			$usuario_autenticado = true;
		}
	}

	if($usuario_autenticado){
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['x'] = 'um valor';
		$_SESSION['y'] =  'outro valor';
		header('Location: home.php');		
	}
	else{
		//função do php que indica um caminho 
		header('Location: index.php?login=erro');
		$_SESSION['autenticado'] = 'NAO';
	}

?>