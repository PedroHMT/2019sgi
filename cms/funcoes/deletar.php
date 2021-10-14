<?php
include("../../config/conexao.php");
session_start();
  if( !isset($_SESSION["usuario"]) ){
  session_destroy();
  header("location:login.php");
  }
$sql = "DELETE FROM blog WHERE Blog_Codigo = ";
mysqli_query($conexao, $sql.$_GET['noticie']);
header("location: ../editar.php");
?>