<?php

	$host = 'localhost';
	$user = 'id11153025_pedro';
	$pwd = 'pedrinho123';
	$bd = 'id11153025_website';

	$conexao = mysqli_connect($host,$user,$pwd);
	mysqli_select_db($conexao, $bd);

	mysqli_set_charset($conexao, "utf8");

	/*if(!$conexao)
	{
		echo "Conexão Falhada.";
	}*/

?>