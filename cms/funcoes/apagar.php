<?php
include('../../config/conexao.php');
session_start();
  if( !isset($_SESSION["usuario"]) ){
  session_destroy();
  header("location:login.php");
  }
  $diretorio = "../../img/blog";
  $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blog_imagens ON BlogImagens_Blog_Codigo = Blog_Codigo INNER JOIN usuarios ON Blog_Usuarios_Codigo = Usuarios_Codigo WHERE Blog_Codigo = ".$_GET['noticia']);
  $result = mysqli_fetch_array($query);
  $sql = "DELETE FROM blog WHERE Blog_Codigo = ";
  mysqli_query($conexao, $sql.$_GET['noticia']);
  unlink($diretorio.'/'.$result[6]);
  header("location: ../editar.php");
?>