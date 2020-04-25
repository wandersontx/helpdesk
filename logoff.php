<?php
	session_start();
	//remover indices do array de sessão
	//unset() -> utlizada para remover indices de qualquer array, inclusive da variavel global session, get, post
	//--------------------------------
	//destruir a variável de sessão
	//session_destroy() -> destroi todos os indices dentro da variavel de sessão (session)

	/*echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	removendo apenas um indice especifico. tem a inteligencia de verifica antes de executar a exclusão do mesmo, caso o indice não exista, não dará erro
	unset($_SESSION['x']);
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";


	//destruindo a session completamente. porem, somente no proximo acesso que não teremos mais acesso a variavel de sessão.
	session_destroy();
	//comum ao executar um session-destroy forçar um redirecionamento
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	*/
	session_destroy();
	header("Location: index.php");

?>