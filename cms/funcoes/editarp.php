<?php
include("../../config/conexao.php");

session_start();
  if( !isset($_SESSION["usuario"]) ){
  session_destroy();
  header("location:login.php");
  }

$diretorio = '../../img/perfil';

$p_cod = $_POST['p_cod'];
$p_titulo = $_POST['p_t'];

$query = mysqli_query($conexao, "SELECT * from perfil WHERE p_cod=$p_cod");
$re = mysqli_fetch_array($query);
$antigoname = $re[2];


mysqli_query($conexao, "UPDATE perfil SET p_t='$p_titulo' WHERE p_cod='$p_cod'");
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
				
				//echo "Arquivo <b>".$arquivo['name'][$k]."</b> enviado com sucesso!";
				
				/* 
				Pegando o id do último insert: 
				PHP - mysqli_insert_id()
				MySQL - LAST_INSERT_ID()
                */
                unlink($diretorio.'/'.$antigoname);
                mysqli_query($conexao, "UPDATE perfil SET p_img='$novoname' WHERE p_cod='$p_cod'");
			}
               
        }
}

header("location: ../editarperf.php?id=$p_cod");


?>