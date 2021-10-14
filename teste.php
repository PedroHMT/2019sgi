<?
/* * ---------------------------------------------- *
Recuperando dados do mysql com FCKEditor * Autor: Orides Tomkiel Zmovirzynski * orides@midiaville.com.br * www.midiaville.com.br *
---------------------------------------------- */

$conexao = mysql_connect("localhost","root","123");
//Faz conexão com o mysql
$db = mysql_select_db("editor"); 
//Seleciona o banco de dados 

include "editor/fckeditor.php"; 
//Chama a classe fckeditor  

$id_select = $_GET['id']; 
//Recupera a variavel id para fazer o select  

$id = $_POST['id']; 
//Recupera a variavel id para fazer o update  

$titulo = $_POST['titulo']; 
//Pega os titulo postado e coloca em uma variável  

$texto = $_POST['texto']; 
//Pega os texto postado e coloca em uma variável

if ((isset($_POST['id'])) && ($_POST['titulo']) && ($_POST['texto'])){
//Verifica se a variável foi postada  

$sql = "UPDATE editor SET titulo='$titulo', texto='$texto' where id=$id"; 
//Faz a alteração do registro  

$result = mysql_query($sql) or die(mysql_error()); 
//Verifica se os registros foram alterados  

header("Location: editor_mostra.php"); 
//Após inserido redireciona para a página editor_mostra.php  }

$sql_texto = "SELECT * FROM editor where id=$id_select";
$query_texto = mysql_query($sql_texto) or die(mysql_error());
$row_texto = mysql_fetch_assoc($query_texto);$id = $row_texto['id'];
$titulo = $row_texto['titulo'];$texto = $row_texto['texto'];?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<!-- Caminho do arquivo js do FCK Editor-->
		<script type="text/javascript" src="editor/fckeditor.js"></script>
	</head>
	<body>
		<form method="post" name="form" action="<?=$_SERVER['PHP_SELF']?>">
			<b>Titulo</b>
			<input name="titulo" value="<?php echo "$titulo"; ?>" type="text" size="40" maxlength="200">
			<?php $editor = new FCKeditor("texto"); 
			//Nomeia a área de texto
			$editor->BasePath = "/editor/";  
			//Informa a pasta do FKC Editor 
			$editor->Value = "$texto";	   
			//Informa o texto a ser alterado 
			$editor->Width = "80%";		  
			//informa a largura do editor  
			$editor->Height = "250";		 
			//informa a altura do editor
			$editor->Create();			   
			// Cria o editor ?>
			<input type="submit" value="Alterar">
			<input type="hidden" name="id" value="<?php echo "$id"; ?>">
		</form>
	</body>
</html>
