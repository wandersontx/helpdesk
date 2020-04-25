<?php
	//trabalhando no texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//PHP_EOL -> Armazena o caracter de quebra de linha de acordo com o sistema operacional
	$texto = $titulo. '#' .$categoria. '#' .$descricao.PHP_EOL;


	//abrindo um arquivo. 1param: nome do arquivo ### 2º parm: modo? leitura, escrita, abertura de arquivo..etc
	$arquivo = fopen('arquivo.hd', 'a');

		
	//como no fopen foi descrito o parametro 'a', o fwrite vai escrever o texto no final do arquivo.
	fwrite($arquivo, $texto);


	//fechando o arquivo.
	fclose($arquivo);

	header("Location: abrir_chamado.php");
	
	?>