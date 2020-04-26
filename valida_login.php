<?php

//instancia de um session que serve para comunicação do servidor com cliente (browser)
 session_start();
$_SESSION;




$usuario_autenticado = false; 
$usuario_id = null;
$usuario_perfil_id = null;
$perfis = array(1 => 'Administrativo', 2 => 'Usuário');



$email = $_POST["email"];
$senha = $_POST["senha"];

	$usuario_app = array(
		array('id' => 1 ,'email' => 'adm@adm.com.br', 'senha' => '123', 'perfil_id' => 1),
		array('id' => 2,'email' => 'user@teste.com.br', 'senha' => 'abcd','perfil_id' => 2),
		array('id' => 3,'email' => 'wanderson@gmail.com', 'senha' => '99', 'perfil_id' => 1),
		array('id' => 4,'email' => 'jose@gmail.com', 'senha' => 'abc', 'perfil_id' => 2),
		array('id' => 5,'email' => 'maria@gmail.com', 'senha' => 'abc', 'perfil_id' => 2)
	);
	

	foreach($usuario_app as $user){
		if($user['email'] == $email && $user['senha'] == $senha){
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

	if($usuario_autenticado){
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;	
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');		
	}
	else{
		//função do php que indica um caminho 
		header('Location: index.php?login=erro');
		$_SESSION['autenticado'] = 'NAO';
	}

?>