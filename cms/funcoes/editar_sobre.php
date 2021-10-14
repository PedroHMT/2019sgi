<?php
include("../../config/conexao.php");

$diretorio = '../../img/blog';

$cod = $_POST['Sobre_Cod'];
$titulo = $_POST['Sobre_Titulo'];
$corpo = $_POST['Sobre_Corpo'];
$corpo = nl2br($corpo);

$query = mysqli_query($conexao, 'SELECT * from sobre LIMIT 1');
$re = mysqli_fetch_array($query);
$antigoname = $re[3];
echo $re[3];
mysqli_query($conexao, "UPDATE sobre SET sobre_titulo='$titulo', sobre_corpo='$corpo' WHERE sobre_cod='$cod'");
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
                mysqli_query($conexao, "UPDATE sobre SET sobre_img='$novoname' WHERE sobre_cod='$cod'");
			}
               
        }
}

header("location: ../editar_sobre.php");


?>