<?php
include("../../config/conexao.php");

session_start();
  if( !isset($_SESSION["usuario"]) ){
  session_destroy();
  header("location:login.php");
  }

$diretorio = "../../img/blog";

$Blog_Titulo = $_POST['Blog_Titulo'];
$Blog_Corpo = $_POST['Blog_Corpo'];

mysqli_query($conexao,"INSERT INTO blog (Blog_Titulo, Blog_Corpo, Blog_Data, Blog_Usuarios_Codigo) VALUES ('$Blog_Titulo','$Blog_Corpo', NOW(), 3)");
$ultimo_id = mysqli_insert_id($conexao);

if(!is_dir($diretorio))
{
    echo "O diretorio '$diretorio' não foi localizado.";
}
else
{
    $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
    for ($k = 0; $k < count($arquivo['name']); $k++) {
			
			$extensao = pathinfo($arquivo['name'][$k], PATHINFO_EXTENSION);
			
			$arquivo_n = md5(strlen($arquivo['name'][$k])*rand(1,99999));
			
            $destino = $diretorio."/".$arquivo_n.".".$extensao;
            $novoname = $arquivo_n.".".$extensao;

		    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
				
				echo "Arquivo <b>".$arquivo['name'][$k]."</b> enviado com sucesso!";
				
				/* 
				Pegando o id do último insert: 
				PHP - mysqli_insert_id()
				MySQL - LAST_INSERT_ID()
				*/
				
			} else {
				
                echo "Falha ao mover o arquivo"; 
            }
                mysqli_query($conexao,"INSERT INTO blog_imagens (BlogImagens_Nome, BlogImagens_Blog_Codigo) VALUES ('$novoname', '$ultimo_id')");
        }
}

header("location: ../cadastrar.php");



?>